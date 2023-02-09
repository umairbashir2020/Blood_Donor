<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function faq(){
        return view('page.faq');
    }
    public function first_layout(){
        return view('page.gallery.layout_first');
    }
    public function second_layout(){
        return view('page.gallery.layout_second');
    }
}
