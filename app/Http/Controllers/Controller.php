<?php

namespace App\Http\Controllers;
use App\Models\User;

abstract class Controller
{
    public function users()
    {
        $users=User::all(); 
        $users=User::paginate(5);
        return view('user.index', compact('users'));

    }
}
