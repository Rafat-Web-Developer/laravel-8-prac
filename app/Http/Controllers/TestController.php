<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($name = null)
    {
        return "Welcome ".$name;
    }
    public function home()
    {
        $info = array(
            'name'  => 'Rafat Hossain',
            'email' => 'rafat@gmail.com',
            'phone' => '01876903613'
        );
        return view('home', compact('info'));
    }
}
