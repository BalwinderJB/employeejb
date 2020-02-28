<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        // PLEASE ADD the jwt.auth middleware to protect your resouce
        $this->middleware('jwt.auth');
    }
}
