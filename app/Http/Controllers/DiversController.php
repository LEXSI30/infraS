<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiversController extends Controller
{
  public function divers()
  {
    return view('divers');
  }
}
