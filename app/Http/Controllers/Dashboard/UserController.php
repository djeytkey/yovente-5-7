<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::all();
        return view('dashboard.users.index', compact('users'));

    }


    public function create()
    {
        
        return view('dashboard.users.create');

    }

    
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        $request_data = $request->except(['password', 'is_active']);

        $request_data['password'] = bcrypt($request->password);

        if (!isset($request_data['is_active'])) {

            $request_data['is_active'] = '1';

        } else {

            $request_data['is_active'] = '0';

        }

        $user = User::create($request_data);

        session()->flash('success', __('site.added_successfully'));

        return view('dashboard.users.index');


    }

    
    public function edit(User $user)
    {
        
        

    }

    
    public function update(Request $request, User $user)
    {
        
        

    }

    
    public function destroy(User $user)
    {
        
        

    }
}
