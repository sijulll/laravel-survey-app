<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelReward;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view All data Survei
        $data = ModelReward::all();
        return view('Surevey.reward', compact('data'));
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
        $data = new ModelReward();
        $data->reward_name = $request->reward_name;
        $data->reward_description = $request->reward_description;
        $data->reward_point = $request->reward_point;
        $data->id_admin = $request->id_admin;
        $data->id_reward = $request->id_reward;
        $data->save();
        return redirect()->route('')->with('alert-succes','Berhasil menambahkan data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ModelReward::find($id);
        
        return view ('')->with('data',$data);   
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
        $data = ModelReward::where('id',$id)-> get();
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
        $data = ModelReward::where('id',$id)->first();
        $data->reward_name = $request->reward_name;
        $data->reward_description = $request->reward_description;
        $data->reward_point = $request->reward_point;
        $data->save();
        return redirect()->route('index')->with('alert-succes','Data Berhasil di Ubah');
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
        $data =ModelReward::where('id',$id)->first();
        $data = delete();
        return redirect()->route('')->with('alert-succes','Data Berhasil dihapus');
    }

    public function exchancepoint()
    {
        
    }
}
