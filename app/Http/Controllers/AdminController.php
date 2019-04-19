<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\ModelAdmin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelAdmin::all();
        return view('',compact('data')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //langsung return ke view aja

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new ModelAdmin();
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('')->with('alert-success','Data berhasil di tambahkan');
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
        
        $data = ModelAdmin::where('id',$id)-> get();
        return view('',compact('data'));
  
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
        $data = ModelAdmin::where('id',$id)->first();
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();
        return redirect()->route('')->with('alert-success','Data berhasil diubah !');

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
        $data = ModelAdmin::where('id',$id)->first();
        $data->delete();
        return redirect()->route('')->with('alert-success','Data Berhasil di hapus');
    }
}
