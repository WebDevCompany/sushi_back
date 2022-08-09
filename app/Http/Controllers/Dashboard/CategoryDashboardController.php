<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class CategoryDashboardController extends Controller {

  /**
   * 
   *
   * 
   */
  public function show() {

    $name = Route::currentRouteName(); // string
    //dd($name);
    
    return view('admin.layouts.index', ['nameRoute' => $name]);
  }

}
