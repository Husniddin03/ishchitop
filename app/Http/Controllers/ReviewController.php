<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $review = Review::create($request->all());

        return response()->json($review, 201);
    }

    public function getWorkerReviews($worker_id)
    {
        return Review::where('worker_id', $worker_id)->with('author')->get();
    }
}

