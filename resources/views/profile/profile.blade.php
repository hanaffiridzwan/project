@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Kemaskini Profil</h2>
    </div>
    <div class="panel-body">
        <div class="row">
            

                <form class="form-horizontal" action="{{ action('ProfilesController@update') }}" method="POST" enctype="multipart/form-data">
                
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                
                        <div class="form-group">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama', $user->profile->nama) }}" required>
                            </div>
                        </div>

                       

                            @if ($user->userRole == 'penyelia') 

                             <div class="form-group">
                        <label for="jabatan" class="col-md-4 control-label">Jabatan</label>
                        <div class="col-md-6">
                            <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan', $user->profile->jabatan) }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="noBilik" class="col-md-4 control-label">No bilik</label>
                        <div class="col-md-6">
                            <input id="noBilik" type="text" class="form-control" name="noBilik" value="{{ old('noBilik', $user->profile->noBilik) }}" required>
                        </div>
                    </div> 

                        @else
                
                    <div class="form-group">
                            <label for="noMatrik" class="col-md-4 control-label">Nombor Matrik</label>
                            <div class="col-md-6">
                            <input id="noMatrik" type="text" class="form-control" name="noMatrik" value="{{ old('noMatrik', $user->profile->noMatrik) }}" required>
                              <!--  <td>{{ Auth::user()->noMatrik}}</td> -->
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="kategoriPelajar" class="col-md-4 control-label">Kategori Pelajar</label>
                        <div class="col-md-6">
                             <select name="kategoriPelajar" id="kategoriPelajar">
                                 <option value="" disabled>Sila Pilih</option>
                                 <option value="prasiswazah">Prasiswazah/Sarjana Muda</option>
                                 <option value="pascasiswazah">Pascasiswazah/ Master</option>
                                 <option value="siswazah">Siswazah/Phd</option>
                                 </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="program" class="col-md-4 control-label">Program</label>
                        <div class="col-md-6">
                            <input id="program" type="text" class="form-control" name="program" value="{{ old('program', $user->profile->program) }}" required>
                        </div>
                    </div>

                    
                    
                    @endif

                  <div class="form-group">
                        <label for="noTelefon" class="col-md-4 control-label">No Telefon</label>
                        <div class="col-md-6">
                            <input id="noTelefon" type="text" class="form-control" name="noTelefon" value="{{ old('noTelefon', $user->profile->noTelefon) }}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="gambar" class="col-md-4 control-label">Gambar Profil</label>
                            <div class="col-md-6">
                            <input type="file" name="gambar" id="fileUpload" class="hide">
                                <label for="fileUpload" style="width: 500px">
                                    <img class="image-placeholder" src="{{ $user->profile->gambar }}" width="50%"/>
                            </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{ action('ProfilesController@index') }}" class="btn btn-default">Batal</a>
                            <button type="submit" class="btn btn-primary">
                                Hantar
                            </button>
                        </div>
                    </div>

        </form>

            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection