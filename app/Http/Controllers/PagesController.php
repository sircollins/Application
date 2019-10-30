<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home Page Root - Update
    public function index()
    {
        return view('index');
    }

    public function start()
    {
        return view('one');
    }

    // Update To New View
    public function finish()
    {
        return view('finish');
    }

    // test view

}
