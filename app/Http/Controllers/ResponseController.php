<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;
use App\ModelSurvei;
use App\ModelResponse;
use App\ModelPertanyaan;
use Illuminate\Support\Facades\Redirect;
class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, ModelSurvei $survey) //ModelPertanyaan $pertanyaan )
    {
        //
        $arr = $request->except('_token');
        foreach ($arr as $key => $value)
        {
            $newResponse = new ModelResponse();
            if (! is_array($value))
            {
                $newValue = $value['response'];    
            } else 
            {
                $newValue =json_encode($value['response']);       
            }
            $newResponse->id_user = Auth::id();
            $newResponse->id_pertanyaan = $key;
            $newResponse->id_survei = $survey->id;
            $newResponse->response->$newValue;

            $newAnswer->save();
            
        };
        return redirect()->action('SurveyController@SurveyViewAnswer',[$survey->id]);
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
        //
    }
}
