<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('backend.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about = About::find($id);

        if (!empty($_FILES['about_banner_image']['name'])) {
            $banner_image = 'banner' . time() . '.' . pathinfo($_FILES['about_banner_image']['name'], PATHINFO_EXTENSION);
            !is_null($about->about_banner_image) && Storage::disk('public')->delete($about->about_banner_image);
            $about_banner_image = Storage::disk('public')->putFileAs('about', $request->file('about_banner_image'), $banner_image);
        } else {
            $about_banner_image = $about->about_banner_image;
        }

        if (!empty($_FILES['side_image']['name'])) {
            $banner_image = 'banner_side_image_' . time() . '.' . pathinfo($_FILES['side_image']['name'], PATHINFO_EXTENSION);
            !is_null($about->side_image) && Storage::disk('public')->delete($about->side_image);
            $side_image = Storage::disk('public')->putFileAs('about', $request->file('side_image'), $banner_image);
        } else {
            $side_image = $about->side_image;
        }

        if (!empty($_FILES['text_image_one']['name'])) {
            $banner_image = 'image_1' . time() . '.' . pathinfo($_FILES['text_image_one']['name'], PATHINFO_EXTENSION);
            !is_null($about->text_image_one) && Storage::disk('public')->delete($about->text_image_one);
            $text_image_one = Storage::disk('public')->putFileAs('about', $request->file('text_image_one'), $banner_image);
        } else {
            $text_image_one = $about->text_image_one;
        }

        if (!empty($_FILES['text_image_two']['name'])) {
            $banner_image = 'image_2' . time() . '.' . pathinfo($_FILES['text_image_two']['name'], PATHINFO_EXTENSION);
            !is_null($about->text_image_two) && Storage::disk('public')->delete($about->text_image_two);
            $text_image_two = Storage::disk('public')->putFileAs('about', $request->file('text_image_two'), $banner_image);
        } else {
            $text_image_two = $about->text_image_two;
        }

        if (!empty($_FILES['text_image_three']['name'])) {
            $banner_image = 'image_3' . time() . '.' . pathinfo($_FILES['text_image_three']['name'], PATHINFO_EXTENSION);
            !is_null($about->text_image_three) && Storage::disk('public')->delete($about->text_image_three);
            $text_image_three = Storage::disk('public')->putFileAs('about', $request->file('text_image_three'), $banner_image);
        } else {
            $text_image_three = $about->text_image_three;
        }

        if (!empty($_FILES['about_footer_image']['name'])) {
            $banner_image = 'image_4' . time() . '.' . pathinfo($_FILES['about_footer_image']['name'], PATHINFO_EXTENSION);
            !is_null($about->about_footer_image) && Storage::disk('public')->delete($about->about_footer_image);
            $about_footer_image = Storage::disk('public')->putFileAs('about', $request->file('about_footer_image'), $banner_image);
        } else {
            $about_footer_image = $about->about_footer_image;
        }

        $about->about_banner_image  = $about_banner_image;
        $about->about_banner_title  = $request->about_banner_title;
        $about->about_description  = $request->about_description;

        $about->side_image  = $side_image;
        $about->side_description1  = $request->side_description1;
        $about->side_description2  = $request->side_description2;

        $about->text_image_one  = $text_image_one;
        $about->text_image_title_one  = $request->text_image_title_one;
        $about->text_image_detail_one  = $request->text_image_detail_one;

        $about->text_image_two  = $text_image_two;
        $about->text_image_title_two  = $request->text_image_title_two;
        $about->text_image_detail_two  = $request->text_image_detail_two;

        $about->text_image_three  = $text_image_three;
        $about->text_image_title_three  = $request->text_image_title_three;
        $about->text_image_detail_three  = $request->text_image_detail_three;

        $about->about_footer_image  = $about_footer_image;
        $status = $about->save();
        if ($status) {
            return back()->with('success', "General Setting Updated Successfully");
        } else {
            return back()->with('error', "Something Went Wrong");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
