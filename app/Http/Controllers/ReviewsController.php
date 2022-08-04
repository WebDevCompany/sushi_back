<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function show($id)
    {
        $reviews = Reviews::find($id);
        return view('reviews', ['reviews' => $reviews]);
    }
}
