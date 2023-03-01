<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Wards;
use DB;

class WardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $wards = DB::table('wards')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(20);

            return view('wards.index', compact('wards'));
        }
        else {
            return redirect('/home');
        }
    }
}