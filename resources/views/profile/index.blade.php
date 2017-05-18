@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

<br>

</div>
<!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" > -->


<div class="panel panel-info" style="margin-top:50px">
<div class="panel-heading">
  <!-- <h3 class="panel-title">{{ Auth::user()->nama }}<p class="pull-right">{{ Auth::user()->created_at }}</p></h3> -->

</div>
<div class="panel-body">
  <div class="row">
      <div class="col-md-3 col-lg-3 " align="center"> <img src="{{ asset($user->profile->Pgambar) }}" class="img-circle img-responsive"> </div>

      <div class=" col-md-9 col-lg-9 ">
        <table class="table table-user-information">
          <tbody>

            <tr>
              <td>Nama: </td>
              <td>{{ $user->profile->nama }}</td>
            </tr>
            @if ($user->userRole == 'Penyelia')
           
            <tr>
              <td>Jabatan: </td>
              <td>{{ $user->profile->jabatan }}</td>
            </tr>   

            <tr>
              <td>noBilik: </td>
              <td>{{ $user->profile->noBilik }}</td>
            </tr>

            @else
            <tr>
              <td>Program: </td>
              <td>{{ $user->profile->program }}</td>
            </tr>
        
             <tr>
                <td>Kategori pelajar: </td>
                <td>{{ $user->profile->kategoriPelajar }}</td>
              </tr>
            <tr>
              <td>id Daftar: </td>
              <td>{{ $user->profile->idDaftar }}</td>
            </tr>
             <tr>
             @endif

              <td>Telefon: </td>
              <td>{{ $user->profile->noTelefon }}</td>
            </tr>
        

            <tr>
              <td>Gambar Profil: </td>
              <td>{{ $user->profile->gambar }}</td>
            </tr>
          </tbody>
        </table>
        <div class="text-center">
          @if( $user->profile->user_id == Auth::user()->id)
            <a href="{{ action('ProfilesController@edit') }}" class="btn btn-success">Kemaskini Maklumat Diri</a>
          @endif
        </div>
      </div>
  </div>
</div>
      <div class="panel-footer">
            <a href="{{ url('home') }}" type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i>  Keluar</a>
      </div>

      </tbody>
  </table>
</div>
</div>
</div>
@stop
