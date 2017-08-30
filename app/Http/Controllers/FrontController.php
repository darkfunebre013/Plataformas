<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Slider;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $product = Product::Products();
    $slider = Slider::Sliders();
     return view('index',compact('slider','product'));
  }

}
