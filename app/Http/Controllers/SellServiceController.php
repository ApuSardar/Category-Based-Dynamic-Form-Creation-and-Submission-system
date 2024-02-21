<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSell;
use Illuminate\Http\Request;

class SellServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sell_services = ServiceSell::get();
        return view('backend.sell_service.index', compact('sell_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::pluck('name', 'id');
        return view('backend.sell_service.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'mobile' => 'required',
            'address' => 'required|string',
            'service_name' => 'required'
        ]);

        $data = $request->all();
        $status = ServiceSell::create($data);
        if ($status) {
            return redirect()->route('sellservice.index')->with('success', 'Sell Service Created Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sell_service = ServiceSell::find($id);
        return view('backend.sell_service.invoice', compact('sell_service'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = ServiceSell::find($id);
        if ($status) {
            ServiceSell::find($id)->delete();
            return redirect()->route('sellservice.index')->with('success', 'Deleted Successfully');
        } else {
            return back()->with('error', 'Something Went Wrong!');
        }
    }
}
