<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Dashboard.ManageUser',[
            'users' => $users,
        ]);
    }

    public function create()
    {

        $users = User::all();
        return view('Dashboard.ManageUser',[
            'users' => $users,
        ]);

    }

    

    
    public function show(){

        $users = User::OrderBy('created_at', 'desc')->get();
        return view('Dashboard.ManageUser', compact('users'));

    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect ('/ManageUsers');

    }
}
