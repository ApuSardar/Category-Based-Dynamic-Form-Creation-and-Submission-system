<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Project;
use App\Models\ProjectContent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about_info = About::first();
        return view('frontend.pages.about.index', compact(['about_info']));
    }
}
