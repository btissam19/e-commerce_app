<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(){
        return back()->with('status', 'Profile updated!');
    }
}
