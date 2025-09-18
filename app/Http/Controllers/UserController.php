<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('#', compact('users'));
    }
    public function create(){
        return view('#');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'required|min:6',
        ]);
        $user = User::create($request->all());
        return redirect()->route('#')->with('success', 'User created successfully');
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('#', compact('user'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'nullable|min:6',
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('#')->with('success', 'User updated successfully');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('#')->with('success', 'User deleted successfully');
    }
}
