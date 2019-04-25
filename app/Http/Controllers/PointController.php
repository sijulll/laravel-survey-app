<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPoint;
class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelPoint::all();
        return view('',compact('data'));
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
        //
        $data = new ModelPoint();
        $data->score_point = $request->score_point;
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
        //
        $data = ModelPoint::where('id',$id)->get();
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
        $data = ModelPoint::where('id',$id)->first();
        $data->score_point = $request->score_point;
        $data->save();
        return redirect('')->route('')->with('alert-success','Data berhasil di ubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPoint::where('id',$id)->first();
        $data->delete();
        return redirect()->route('')->with('alert-success','data berhasil di hapus');
    }
    public function SistemPoint($id)
    {
        //Algoritma to add point here 
    }
}
