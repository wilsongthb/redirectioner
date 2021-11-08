<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function dashboard() {
    return view('dashboard', ['links' => Link::all()]);
  }
}
