<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USer;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
}
