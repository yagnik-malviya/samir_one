<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function buy()
    {
        return view('user.buy');

    }
    public function sell()
    {
        return view('user.sell');
    }
    public function rent()
    {
        return view('user.rent');
    }
    public function contact()
    {
        return view('user.contact');
    }
}
