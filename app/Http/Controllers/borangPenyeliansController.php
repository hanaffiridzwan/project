<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\borangPenyelian;
use App\user;

class borangPenyeliansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('borangPenyelian.index', ['borangPenyelians'=>borangPenyelian::orderBy('id')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('borangPenyelian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {

       $this->validate($request, ['nama' =>'required', 'noMatrik'=>'required', 'kategoriPelajar'=>'required', 'program'=>'required', 'namaPenyelia'=>'required', 'laporanPerjumpaan'=>'required', 'tarikhPerjumpaan'=>'required', 'laporanPerjumpaan'=>'required', 'tarikhPerjumpaan'=>'required', 'perjalananObjektif'=>'required', 'objektif'=>'required', 'tarikhPerjumpaanSeterusnya' =>'required']); 
       $borangPenyelian = new borangPenyelian;
       $borangPenyelian->nama = $request->nama;
       $borangPenyelian->noMatrik = $request->noMatrik;
       $borangPenyelian ->kategoriPelajar = $request->kategoriPelajar;
       $borangPenyelian->program = $request->program;
       $borangPenyelian->namaPenyelia = $request->namaPenyelia;
       $borangPenyelian->laporanPerjumpaan = $request->laporanPerjumpaan;
       $borangPenyelian->tarikhPerjumpaan = $request->tarikhPerjumpaan;
       $borangPenyelian->perjalananObjektif =$request->perjalananObjektif;
       $borangPenyelian->objektif = $request->objektif;
       $borangPenyelian->tarikhPerjumpaanSeterusnya = $request->tarikhPerjumpaanSeterusnya;
       $borangPenyelian->user_id=Auth::user()->id;
       $borangPenyelian->save();
       // dd($borangPenyelian);
       
       return redirect()->action('borangPenyeliansController@store')->withMessage('Maklumat anda telah disimpan di dalam sistem');
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
