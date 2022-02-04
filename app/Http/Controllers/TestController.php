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
        $welcome = array(
            'message' => 'Assalamualaikom',
            'name' => 'Rafat Hossain',
            'phone' => '01876903613'
        );
        $info = array(
            'name'  => 'Rafat Hossain',
            'email' => 'rafat@gmail.com',
            'phone' => '01876903613'
        );
        return view('home', compact('info', 'welcome'));
    }
    public function welcome()
    {
        $info = array(
            'name' => 'Rafat Hossain',
            'email' => 'rafat@gmail.com'
        );
        return view('welcome', compact('info'));
    }

    public function user(Request $request) {
        if ($request->path() == 'user') {
            return view('user');
        }else {
            return "Wrong User";
        }
    }
    public function userForm(Request $request)
    {
        return $request->all();
    }


}
