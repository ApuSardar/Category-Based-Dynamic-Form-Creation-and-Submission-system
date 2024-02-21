<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.pages.contact.index');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $status = Contact::create($data);
        if ($status) {
            return response()->json([
                'status' => true,
                'message' => 'Thank you for your Contact'
            ],200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Opps! Something Went Wrong'
            ]);
        }
    }
}
