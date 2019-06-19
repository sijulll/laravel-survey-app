<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\ModelUser;
use Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LoginSes()
    {
        if(!Session::get('Login'))
        {
            return redirect('index')->with('alert','Silahkan login terlebih dahulu');
        }
        else
        {
            return view('surveylist');
        }
        return view('index');
    }

    
    public function LoginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = user::where('email',$email)->first();
        if($data)  //check email apakah ada atau tidak
        {
            if(Hash::check($password,$data->password))
            {
                Session::put('full_name',$data->full_name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                
                return redirect('surveylist');
            }
            else
            {
                return redirect('index')->with('alert','Password atau Email yang anda masukan salah !!! ' );
            }
        }
    }

    public function RegisterPost(Request $request)
    {   
        $this->validate($request, [
            'full_name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:user',
            'password'=>'required',
            'repassword'=>'required|same:password',
        ]);

        $data = new user();
        $data->full_name = $request->full_name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('index')->with('alert-success','Berhasil Register silahkan login.'); 
    
    }

    public function Logout()
    {
        Session::flush();
        return redirect('index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('surevey.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelUser::where('id_user',$id)-> get();
        return view('Survey.editprofile',compact('data'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //$id_user)
    {
        $data = ModelUser::where('id_user',$request->id)->first();
        $data->nama_user = $request->nama_user;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->pekerjaan = $request->pekerjaan;
        $data->wilayah = $request->wilayah;
        $data->user_point = $request->user_point;
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
    }
}
