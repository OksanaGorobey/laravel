<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDash extends Controller
{
    public function index(){
        return view('adminviews.index');
    }
}