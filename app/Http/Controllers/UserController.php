<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User Profil',
            'login'=> User::all()
        );
        return view('user.index', $data);
    }
    public function setting()
    {
        $data = array('title'=> 'Setting Profil');
        return view('user.setting', $data);
    }
}
