<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        return view('backend.banner.edit', compact('banner'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required|string',
            'image'       => 'image',
            'Short_description' => 'required|string',
            'button_text'   => 'required|max:25',
        ]);
        $banner = Banner::find($id);
        if (!empty($_FILES['image']['name'])) {
            $banner_image = 'image_' . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            Storage::disk('public')->delete($banner->image);
            $filename = Storage::disk('public')->putFileAs('banner', $request->file('image'), $banner_image);
        } else {
            $filename = $banner->image;
        }
        $banner->title = $request->title;
        $banner->Short_description = $request->Short_description;
        $banner->image = $filename;
        $banner->button_text = $request->button_text;
        $banner->update();
        return redirect()->route('banner.index')->with('success', 'Banner Saved Successfully');
    }
    public function destroy($id)
    {
    }
}
