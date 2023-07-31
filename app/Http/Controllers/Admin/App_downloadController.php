<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App_download;
use Illuminate\Http\Request;

class App_downloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app_download = App_download::orderBy('id', 'DESC')->get();

        return view('admin.app_download.index', compact('app_download'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.app_download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        App_download::create($request->all());

        if($request->hasFile('img'))
        {
          $requestData['img'] = $this->file_upload();
        }

        // App_download::create($requestData);

        // $user = auth()->user()->name;
        // event(new AuditEvent($user, 'infos', 'add', $requestData));


        return redirect()->route('admin.app_download.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(App_download $app_download)
    {
        return view('admin.app_download.show', compact('app_download'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(App_download $app_download)
    {
        return view('admin.app_download.edit', compact('app_download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, App_download $app_download)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            if(isset($app_download->img) && file_exists(public_path('/img/'.$app_download->img))){
                unlink(public_path('/img/'.$app_download->img));
            }
          $requestData['img'] = $this->file_upload();
        }
        
        $app_download->update($requestData);;
        
        return redirect()->route('admin.app_download.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(App_download $app_download)
    {

        if(isset($app_download->img) && file_exists(public_path('/img/'.$app_download->img)))
        {
            unlink(public_path('/img/'.$app_download->img));
        }


        $app_download->delete();
        return redirect()->route('admin.app_download.index')->with('success', 'Delete done');
    }

    public function file_upload(){
        $file = request()->file('img');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('img/', $fileName);
        return $fileName;
    }
}
