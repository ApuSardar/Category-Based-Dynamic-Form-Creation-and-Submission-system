<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function pricing()
    {
        return view('frontend.pages.pricing.index');
    }
}
