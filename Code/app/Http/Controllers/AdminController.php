<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        return view('Dashboard.ManageAdmins', compact('admins'));
    }

    public function Validation($request)
    {
        $request->validate([
            'name'               => 'required',
            'email'              => 'required|email',
            'password'           => 'required|min:8|max:16',
           
        ]);

        return redirect('AddAdmins');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Admin::create([
            "name"           => $request->name,
            "email"          => $request->email,
            "password"       => $request->password,
            
        ]);

        return redirect('ManageAdmins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin,$id)
    {
        $admin = Admin::where('id', $id)->get()->first();
        return view('Dashboard.ManageAdmins', [
            "admin" => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin,$id)
    {
        Admin::where('id', $id)->update([
            "name"           => $request->name,
            "email"          => $request->email,
            "password"       => $request->password,
           

        ]);
        return redirect('Dashboard/ManageAdmins');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin,$id)
    {
        $admins = Admin::findOrFail($id);
        $admins->delete();
        return redirect('Dashboard/ManageAdmins');
    }
}
