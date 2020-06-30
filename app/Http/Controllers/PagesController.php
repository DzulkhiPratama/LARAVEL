<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view('welcomesanber');
    }
    public function signup()
    {
        return view('form');
    }

    public function registerpost(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;

        return view('well', compact('firstname', 'lastname'));
    }
}
