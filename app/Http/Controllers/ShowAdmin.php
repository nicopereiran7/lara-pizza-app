<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowAdmin extends Controller
{
    public function index() {
        return view('admin.home');
    }

    public function users() {
        $users = User::paginate(2);
        return view('admin.users', compact('users'));
    }

    public function products() {
        return view('admin.products');
    }

    public function promo() {
        return view('admin.promo');
    }
}
