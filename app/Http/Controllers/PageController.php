<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
      $url = $request->path();
      $page = Page::where('path', $url)->first();
      if ($request->is('info')) {
        return view('/info', ['page' => $page]);
      }   
      if ($request->is('main')) {
        return view('/main', ['page' => $page]);
      }   
      if ($request->is('news')) {
        return view('/news', ['page' => $page]);
      }    
      return view('sorry');
    } 
}
