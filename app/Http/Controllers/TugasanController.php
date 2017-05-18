<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Validator;
use App\Tugasan;

class TugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getView()
    {
        return view('tugasan.uploadfile');
    }
    public function insertFile()
    {
        $namatugasan = Input::get('namaTugasan');
        $file = Input::file('dokumen');

        // echo $namaTugasan;
        // echo $dokumen;
        $rules = array(
            'namaTugasan' => 'required',
            'dokumen' => 'required|max:100000|mimes:doc,docx,pptx,pdf,jpeg,png,jpg' );

        $validator = Validator::make(Input::all(), $rules);
       
        if ($validator->fails()){
            //redirect our user back with error messages
            $messages= $validator->messages();
            //send back to the page with the input data and error return
            return Redirect::to('uploadfile')->withInput()->withErrors($validator);
        }
        else if($validator->passes()){
            // echo "success validator";
            // checking file validation or not?
            if (Input::file('dokumen')->isValid())
            {
               $extension = Input::file('dokumen')->getClientOriginalExtension(); 
               //renaming
               $dokumen = rand(11111, 99999).'.'.$extension;

               $destinationPath ='up_file';
              // means projectfolder/public/ up_file
              
               // $file->move($destinationPath, $namaTugasan);
               $data=array(
                'namaTugasan'=>$namatugasan,
                'dokumen'=>$dokumen,
                'user_id'=> auth()->id(), );

               Tugasan::insert($data);

               $upload_success = $file->move($destinationPath, $dokumen);

            //    $notification = array('message' => 'Dokumen Berjaya Disimpan!', 'alert-type' => 'success');
               return redirect()->action('TugasanController@insertFile')->withMessage('Maklumat telah disimpan');
            //    return Redirect::to('tugasan.uploadfile')->with($notification);
             }
            else {
                return redirect()->action('TugasanController@insertFile')->withMessage('Maklumat tidak disimpan');
                // $notification = array('message' => 'Dokumen Tidak Berjaya Disimpan!', 'alert-type' => 'error');
                // return Redirect::to('tugasan.uploadfile')->with($notification);  
            }
            
        }
    }
    // public function upload()
    // {
        // $file=array('dokumen' =>Input::file('dokumen'));//getting all of the post data

        // $rules = array('dokumen' =>'required',);//setting rules

        // $validator = Validator::make($file. $rules);
        // if($validator->falis()){
        //     //send back to the page with the input data , rules and meesages
        //     return redirect::to('upload')->withInput()->withErrors($validator);
           
        // }
        // else 
            //sending back with error message
        //     Session::
        // }
    // }
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
