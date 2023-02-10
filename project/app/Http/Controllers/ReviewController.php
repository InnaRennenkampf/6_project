<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function review()
    {
        $review = new Review();

        return viewWithCategories('review', ['reviews' => $review->all()]);
    }

    public function review_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $review = new Review();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
