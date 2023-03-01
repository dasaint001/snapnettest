<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\State;
use DB;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $states = DB::table('states')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(20);

            return view('states.index', compact('states'));
        }
        else {
            return redirect('/home');
        }
    }
}