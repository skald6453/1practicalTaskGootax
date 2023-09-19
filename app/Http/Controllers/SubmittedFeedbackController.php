<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubmittedFeedbackController extends Controller
{
    protected function create(Request $request)
    {
        $validated= $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'feedback' => ['required', 'string', 'min:10'],
        ]);

        $rules = Feedback::create([
            'email' => $request->email,
            'sex' => $request->sex,
            'delivery' => $request->delivery,
            'feedback' => $request->feedback,
        ]);

        return view('submittedFeedback');
    }
}
