<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $id = Auth::user()->id;
        return view('profile.index');
    }
}
