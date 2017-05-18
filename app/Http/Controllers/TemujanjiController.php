<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\temujanji;
use App\user;
use DateTime;

class TemujanjiController extends Controller
{
    public function see()
    {
        return view('temujanji.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('temujanji.list', ['temujanjis'=>temujanji::orderBy('masaMula')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temujanji.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, ['nama' => 'required', 'aktiviti' => 'required', 'time' => 'required', 'pengesahan']);

        $time = explode(" - ", $request->input('time'));

        $temujanji  = new temujanji;
        $temujanji->nama = $request->input('nama');
        $temujanji->aktiviti = $request->input('aktiviti');
        $temujanji->masaMula = $this->change_date_format($time[0]);
        $temujanji->masaAkhir = $this->change_date_format($time[1]);
        $temujanji->user_id = Auth::user()->id;
        $temujanji->save();
      
        return redirect()->action('TemujanjiController@store')->withMessage('Maklumat telah disimpan');
        // $request->session()->flash('success', 'Aktiviti berjaya disimpan!');
        // return redirect('temujanjis/create');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request, $id)
{
    // $this->validate($request, ['nama' => 'required', 'aktiviti' => 'required', 'time' => 'required', 'pengesahan']);
$this->validate($request, ['pengesahan']);
$temujanji=temujanji::findOrFail($id);
$temujanji->user_id=Auth::user()->id;
$temujanji->pengesahan = $request->pengesahan;
$temujanji->save();

return redirect()->action('TemujanjiController@index')->withMessage('Temujanji berjaya disimpan');
}
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $temujanji = temujanji::findOrFail($id);
        $first_date = new DateTime($temujanji->masaMula);
        $second_date = new DateTime($temujanji->masaAkhir);
        $difference = $first_date->diff($second_date);

        $data = ['temujanji' => $temujanji, 'duration' => $this->format_interval($difference)];
        return view('temujanji.view', $data);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('temujanji/edit', ['temujanjis' =>temujanji::findOrFail($id)]);
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
        $time = explode(" - ", $request->input('time'));

        $temujanji = temujanji::findOrFail($id);
        $temujanji->nama = $request->input('nama');
        $temujanji->aktiviti = $request->input('aktiviti');
        $temujanji->masaMula = $this->change_date_format($time[0]);
        $temujanji->masaAkhir = $this->change_date_format($time[1]);
        $temujanji->save();

        return redirect('temujanji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temujanji = temujanji::find($id);
        $temujanji->delete();

        return redirect('temujanjis');
            }
     public function change_date_format($date)
    {
        $time = DateTime::createFromFormat('d/m/Y H:i:s', $date);
        return $time->format('Y-m-d H:i:s');
    }
    
    public function change_date_format_fullcalendar($date)
    {
        $time = DateTime::createFromFormat('Y-m-d H:i:s', $date);
        return $time->format('d/m/Y H:i:s');
    }
           
    public function format_interval(\DateInterval $interval)
    {
        $result = "";
        if ($interval->y) { $result .= $interval->format("%y year(s) "); }
        if ($interval->m) { $result .= $interval->format("%m month(s) "); }
        if ($interval->d) { $result .= $interval->format("%d day(s) "); }
        if ($interval->h) { $result .= $interval->format("%h hour(s) "); }
        if ($interval->i) { $result .= $interval->format("%i minute(s) "); }
        if ($interval->s) { $result .= $interval->format("%s second(s) "); }
        
        return $result;
    }
}
