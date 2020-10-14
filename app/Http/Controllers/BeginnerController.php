<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BeginnerController extends Controller
{
  public function getIndex()
  {
    return view('beginner');
  }
}