<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        return view('backend.home');
    }
}
