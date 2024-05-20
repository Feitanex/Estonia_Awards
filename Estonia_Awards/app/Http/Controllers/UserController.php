<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $roles=array('admin','manager','user');
        $users = User::orderBy('name', 'asc')->get();
        return view('users.index', compact('users', 'roles'));
    }
    public function userByrole(Request $request)
    {
        $roles=array('admin','manager','user');
        $data = $request->all();
        $selectRole=$data['role'];
        if($data['role']=="0"){
            return redirect('/users');
        }else{
            $users = User::where('role', 'LIKE', $data['role'])->get();
            return view('users.index', compact('users','roles','selectRole'));
        }
    }
    public function showRegistrationForm()
    {
        return view('users.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role for new users
        ]);
        return redirect()->route('register.form')->with('success', 'Registration successful! Please log in.');
    }
    public function create()
    {
        $roles = array('admin', 'manager', 'user');
        return view('users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation'=> 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>$request->role,
        ]);
        return redirect('users');
    }
    public function show(User $user)
    {
        //
    }
    public function edit(User $user)
    {
        $roles = array('admin', 'manager', 'user');
        return view('users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        if(!isset($request->role )) $request->role=Auth::user()->role;
        if ($request->password) {
            $request->validate([
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required',
            ]);
            $user->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'role' => $request->role,
            ]);
        }
        return redirect('/users');
    }
    public function destroy(User $user)
    {
        //
    }
}
