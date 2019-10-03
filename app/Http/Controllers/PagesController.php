<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'welcome';
        return view('pages.index')->with('title', $title);
    }
     public function about() {
         $about = 'About us';
        return view('pages.about')->with('about', $about);
    }
    public function contact() {
        $data = array(
            'title' => 'Contact'
        );
        return view('pages.contact')->with($data);
    }
}
