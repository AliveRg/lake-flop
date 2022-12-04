<?php

namespace App\Http\Controllers;

use App\Models\User;

class PageHomeController extends Controller
{

    public function Welcome()
    {
        return view('welcome');
    }
}
