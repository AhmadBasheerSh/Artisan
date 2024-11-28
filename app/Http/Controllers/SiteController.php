<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('site.posts');
    }

    public function post() {
        return view('site.post');
    }
}
