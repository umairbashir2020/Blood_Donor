<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function allpost(){
    return view('blog.all_post');
  }
  public function singlepage(){
    return view('blog.single_page');
  }
}
