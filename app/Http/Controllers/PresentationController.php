<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    public function presentation()
    {
      return view('presentation');
    }
}
