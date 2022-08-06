<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeDashboardController extends Controller
{
    /**
     * 
     *
     * 
     */
    public function show()
    {
        return view('admin.layouts.index');
    }
    
}