<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::paginate(5); // User::all();

        return view('admin.users.index', compact('users') );
    }

    public function create() 
    {
        return view('admin.users.create');
    }

    public function store(Request $request) 
    {
        $user = User::create($request->all());

        return redirect()->route('users.index');

    }
}
