<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticControllers extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }

    public function about() {
        return view('about');
    }

    public function policy() {
        return view('policy');
    }

    public function test() {
        return view('test');
    }
}
