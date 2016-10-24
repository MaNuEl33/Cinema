<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class FrontController extends Controller
{
  function index() {
    return view('index');
  }

  function contacto() {
    return view('contacto');
  }

  function reviews() {
    return view('reviews');
  }

}
