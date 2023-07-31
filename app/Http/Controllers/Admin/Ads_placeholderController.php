<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads_placeholder;
use Illuminate\Http\Request;

class Ads_placeholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads_placeholder = Ads_placeholder::orderBy('id', 'DESC')->get();

        return view('admin.ads_placeholder.index', compact('ads_placeholder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads_placeholder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ads_placeholder::create($request->all());


        return redirect()->route('admin.ads_placeholder.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ads_placeholder $ads_placeholder)
    {
        return view('admin.ads_placeholder.show', compact('ads_placeholder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads_placeholder $ads_placeholder)
    {
        return view('admin.ads_placeholder.edit', compact('ads_placeholder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads_placeholder $ads_placeholder)
    {
        $requestData = $request->all();


        
        $ads_placeholder->update($requestData);;
        
        return redirect()->route('admin.ads_placeholder.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ads_placeholder $ads_placeholder)
    {
        $ads_placeholder->delete();
        return redirect()->route('admin.ads_placeholder.index')->with('success', 'Delete done');
    }
}
