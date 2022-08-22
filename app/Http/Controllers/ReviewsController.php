<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    public function showRev($id)
    {
        $review = Reviews::find($id);
        return view('review', ['review' => $review]);
    }

    public function show()
    {
        return view('reviews');
    }
}
