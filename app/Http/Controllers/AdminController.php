<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Citizen;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $citizens_count = Citizen::count();
            return view('adminPanel', compact('citizens_count'));
        }
        else {
            return redirect('/home');
        }
    }

}
