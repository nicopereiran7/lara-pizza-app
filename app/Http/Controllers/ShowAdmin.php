<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowAdmin extends Controller
{
    public function index() {
        return view('admin.home');
    }

    public function users() {
        return view('admin.users');
    }
}
