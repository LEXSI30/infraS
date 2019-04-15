<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparkineController extends Controller
{
  public function index(Content $content)
 {
     return $content
         ->header('jQuery sparkline')
         ->body(new Box('Bar chart', view('admin.sparkline.bar')));
 }
}
