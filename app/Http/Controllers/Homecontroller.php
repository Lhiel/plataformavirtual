<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('status','3')->latest('id')->get();

       // return $courses;

        return view("welcome", compact('courses'));

    }
}
