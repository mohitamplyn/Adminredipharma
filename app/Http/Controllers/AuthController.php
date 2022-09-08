<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function deshboard()
    {
        return view('admin.deshboard');
    }

    public function login(Request $req)
    {
        return view('login');
    }
    public function forgot()
    {
        return view('forgot');
    }

}