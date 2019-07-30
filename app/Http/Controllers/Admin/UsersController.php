<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
    $users = User::all();
    return view('backend.users.index', compact('users'));
    }
}
