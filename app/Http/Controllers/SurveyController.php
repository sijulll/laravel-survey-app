<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\ModelSurvei;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelSurvei::all();
        return view('',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return to view front end;
        return view('');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelSurvei();
        $data->id_kategori = $request->id_kategori;
        $data->judul_survei = $reqiest->judul_survei;
        $data->deskripsi_survei = $request->deskripsi_survei;
        // $data->pict_survei = $request->pict_survei;
        // $data->id_user = $request->id_user;
        // $data->id_point = $request->id_point;
         $data->save();
        return redirect()->route('index')->with('alert-succes','Berhasil menambahkan Data');
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
        $data = ModelSurvei::where('id',$id)->get();
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
        $data =ModelSurei::where('id',$id)->first();
        $data->id_kategori = $request->id_kategori;
        $data->judul_survei = $reqiest->judul_survei;
        $data->deskripsi_survei = $request->deskripsi_survei;
        // $data->pict_survei = $request->pict_survei;
        // // $data->id_user = $request->id_user;
        // $data->id_point = $request->id_point;
        $data->save();
        return redirect()->route('')->with('alert-success','Data berhasil di ubah');
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
        $data = ModelSurvei::where('id',$id)->first();
        $data->delete();
        return redirect()->route('')->with('alert-success','Data berhasil di hapus');
    }
}
