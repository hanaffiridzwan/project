<?php
namespace App\Http\Controllers;

use App\Pelajar;
use App\Penyelia;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProfilesController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $users = User::with('profile')->where('id', auth()->id())->get();
        $user = auth()->user()->load('profile');
        

        return view ('profile.index', compact('user'));
    }

    /**
     *
     */
    public function edit()
    {
        

        $user = auth()->user()->load('profile');

        return view('profile.profile', compact('user'));
    }

    public function role()
    {
        $user = auth()->user()->userRole;

        return view ('layouts.app', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user =auth()->user();
        // $user = User::with('profile')->where('id', auth()->id())->firstOrFail();
        
        $image = '';

        if ($request->hasFile('gambar'))
        {
            $image = '/images/' . time() . '.' . $request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('images/'), $image);
        }

        if ($user->userRole == 'pelajar') {
            $user->profile()->update([
                'nama'        => $request->nama,
                'noMatrik'     => $request->noMatrik,
                'kategoriPelajar'     => $request->kategoriPelajar,
                'program'   => $request->program,
                'noTelefon'     => $request->noTelefon,
                'idDaftar'      => $request ->idDaftar,
                'gambar'      => $image,
            ]);
            
        } else {
            $user->profile()->update([
                'nama'        => $request->nama,
                'jabatan'     => $request->jabatan,
                'noBilik'     => $request->noBilik,
                'noTelefon' => $request->noTelefon,
                'gambar'      => $image,
            ]);
        }

        $user->save();

        return redirect()->action('ProfilesController@index')->withMessage('Profil anda telah berjaya dikemaskini!');

    }

}
