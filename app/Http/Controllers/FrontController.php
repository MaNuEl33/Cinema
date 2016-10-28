<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;

class FrontController extends Controller
{

  public function __construct() {
    $this->middleware('auth', ['only' => 'admin']);
  }

  function index() {
    return view('index');
  }

  function contacto() {
    return view('contacto');
  }

  function reviews() {
    return view('reviews');
  }

  function admin() {
    return view('admin.index');
  }

}
