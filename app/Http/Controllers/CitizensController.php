<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Citizen;
use DB;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->admin) {
            $citizens = DB::table('citizens')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(20);

            return view('citizens.index', compact('citizens'));
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->admin) {
            return view('citizens.create');
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->admin) {

            $validatedData = $request->validate([
                'full_name' => 'required:max:40',
                'ward_id' => 'required',
            ]);
            
            $citizen = new Citizen;
            $citizen->name = $request->name;
            $citizen->phone = $request->phone;
            $citizen->address = $request->address;
            $citizen->gender = $request->gender; 
            $citizen->ward_id = $request->ward_id;
            $citizen->save();

            return redirect('/admin-panel')->with('msg_success', 'Citizen Created Successfully');
            
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->admin) {
            $citizen = Citizen::find($id);
            return view('citizens.view', compact('citizen'));
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->admin) {
            $citizen = Citizen::findOrFail($id);
            //$citizen_role = DB::table('roles')->where('user_id', '=', $id)->first();
            return view('citizens.edit', compact('citizen'));

        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->admin) {

            $validatedData = $request->validate([
                'full_name' => 'required:max:40',
            ]);

            $citizen = Citizen::find($id);
            $citizen->name = $request->name;
            $citizen->phone = $request->phone;
            $citizen->address = $request->address;
            $citizen->gender = $request->gender; 
            $citizen->ward_id = $request->ward_id;
            $citizen->save();

            return redirect('/admin-panel')->with('msg_success', 'Citizen Updated Successfully');
        }
        else {
            return redirect('/home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->admin) {
            $citizen = Citizen::find($id);
            $citizen->delete();
            return redirect('/admin-panel')->with('msg_success', 'Citizen Deleted Successfully');
        }
        else {
            return redirect('/home');
        }
    }
}
