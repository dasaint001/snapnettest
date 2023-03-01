<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lga;
use DB;

class LgasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $lgas = DB::table('lgas')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(20);

            return view('lgas.index', compact('lgass'));
        }
        else {
            return redirect('/home');
        }
    }
}