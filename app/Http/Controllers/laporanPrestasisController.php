<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\laporanPrestasi;
use App\user;

class laporanPrestasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporanPrestasi.index', ['laporanPrestasis'=>laporanPrestasi::orderBy('created_at')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanPrestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['namaPelajar' => 'required',  'namaPenyelia' => 'required', 'tarikh' => 'required', 'tajukKajian' => 'required', 'kemajuan' => 'required', 'dapatan' => 'required', 'huraianAktiviti' => 'required','pelan' => 'required', 'komen' => 'required' ]);

       $laporanPrestasi = new laporanPrestasi; 
       $laporanPrestasi->namaPelajar = $request->namaPelajar;
       $laporanPrestasi->namaPenyelia = $request->namaPenyelia;
       $laporanPrestasi->tarikh = $request->tarikh;
       $laporanPrestasi->tajukKajian = $request->tajukKajian;
       $laporanPrestasi->kemajuan = $request->kemajuan;
       $laporanPrestasi->dapatan = $request->dapatan;
       $laporanPrestasi->huraianAktiviti = $request->huraianAktiviti;
       $laporanPrestasi->pelan = $request->pelan;
       $laporanPrestasi->komen = $request->komen;   
       $laporanPrestasi->komenPenyelia = $request->komenPenyelia;   
       $laporanPrestasi->kemajuanPelajar = $request->kemajuanPelajar;    
       $laporanPrestasi->pelanKajian = $request->pelanKajian;
       $laporanPrestasi->user_id=Auth::user()->id;
       $laporanPrestasi->save();
      

        return redirect()->action('laporanPrestasisController@store')->withMessage('Maklumat anda telah disimpan di dalam sistem');
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
      $laporanPrestasi = laporanPrestasi::findOrFail($id);
      return view('laporanPrestasi.edit', compact('laporanPrestasi'));
      
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
       $laporanPrestasi = laporanPrestasi::find($id);
       $laporanPrestasi->namaPelajar = $request->namaPelajar;
       $laporanPrestasi->namaPenyelia = $request->namaPenyelia;
       $laporanPrestasi->tarikh = $request->tarikh;
       $laporanPrestasi->tajukKajian = $request->tajukKajian;
       $laporanPrestasi->kemajuan = $request->kemajuan;
       $laporanPrestasi->dapatan = $request->dapatan;
       $laporanPrestasi->huraianAktiviti = $request->huraianAktiviti;
       $laporanPrestasi->pelan = $request->pelan;
       $laporanPrestasi->komen = $request->komen;     
       $laporanPrestasi->komenPenyelia = $request->komenPenyelia;   
       $laporanPrestasi->kemajuanPelajar = $request->kemajuanPelajar;  
       $laporanPrestasi->pelanKajian = $request->pelanKajian;
       $laporanPrestasi->save();

       return redirect()->action('laporanPrestasisController@index')->withMessage('Maklumat anda telah disimpan di dalam sistem');
       // return redirect('laporanPrestasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporanPrestasi = laporanPrestasi::findOrFail($id);
        $laporanPrestasi->delete();
        return back()->withError('Maklumat telah berjaya dibuang');

    }   
}
