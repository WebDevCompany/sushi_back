<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function showRev($id)
    {
        $review = Reviews::find($id);
        return view('review', ['review' => $review]);
    }

    public function show()
    {
        $reviews = Reviews::simplePaginate(10);
        return view('reviews', ['reviews' => $reviews]);
        /*return view('reviews', ['reviews' => DB::table('reviews')->paginate(10)]);
        */
    }
}
