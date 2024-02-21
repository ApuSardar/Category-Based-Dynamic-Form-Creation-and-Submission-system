<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('backend.service.index', compact('services'));
    }
    public function create()
    {
        return view('backend.service.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string',
            'price'       => 'required|numeric',
            'status'       => 'required',
        ]);
        $data = $request->all();
        $status = Service::create($data);
        if ($status) {
            return redirect()->route('service.index')->with('success', 'Service Created Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'       => 'required|string',
            'price'       => 'required|numeric',
            'status'       => 'required',
        ]);
        $data = $request->all();
        $status = Service::find($id)->update($data);
        if ($status) {
            return redirect()->route('service.index')->with('success', 'Service Updated Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
    public function destroy($id)
    {

        $status = Service::find($id);
        if ($status) {
            Service::find($id)->delete();
            return redirect()->route('service.index')->with('success', 'Service Deleted Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
}
