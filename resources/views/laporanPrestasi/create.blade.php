@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            
            <img src="{{ ('/images/ukm.jpg')}}" width="200" height="150" class="col-md-4 col-md-offset-2">
                <label class="lead" >Laporan Kemajuan Pelajar</label>
                 <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" method="post" action="{{ action('laporanPrestasisController@store') }}" role="form"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <div class="panel panel-info">
                           <div class="panel-heading">Maklumat Pelajar dan Penyelia</div>
                        <div class="form-group{{ $errors->has('namaPelajar') ? ' has-error' : '' }}">
                            <label for="namaPelajar" class="col-md-4 control-label">Nama Pelajar</label>

                            <div class="col-md-6">
                                <input id="namaPelajar" type="namaPelajar" class="form-control" name="namaPelajar" value="{{ old('namaPelajar') }}" required>

                                @if ($errors->has('namaPelajar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaPelajar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                               <div class="form-group{{ $errors->has('namaPenyelia') ? ' has-error' : '' }}">
                            <label for="namaPenyelia" class="col-md-4 control-label">Nama Penyelia</label>

                            <div class="col-md-6">
                                <input id="namaPenyelia" type="namaPenyelia" class="form-control" name="namaPenyelia" value="{{ old('namaPenyelia') }}" required>

                                @if ($errors->has('namaPenyelia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaPenyelia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('tarikh') ? ' has-error' : '' }}">
                            <label for="tarikh" class="col-md-4 control-label">Tarikh</label>

                            <div class="col-md-6">
                                <input id="tarikh" type="tarikh" class="form-control" name="tarikh" value="{{ old('tarikh') }}" required>

                                @if ($errors->has('tarikh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tarikh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="panel panel-info">
                        <div class="panel-heading">Hasil Penyelian</div>
                         <div class="form-group{{ $errors->has('tajukKajian') ? ' has-error' : '' }}">
                            <label for="tajukKajian" class="col-md-4 control-label">Tajuk Kajian:</label>

                            <div class="col-md-6">
                                <input id="tajukKajian" type="tajukKajian" class="form-control" name="tajukKajian" value="{{ old('tajukKajian') }}" required>

                                @if ($errors->has('tajukKajian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tajukKajian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('kemajuan') ? ' has-error' : '' }}">
                            <label for="kemajuan" class="col-md-4 control-label">kemajuan</label>

                            <div class="col-md-6">
                                <input id="kemajuan" type="kemajuan" class="form-control" name="kemajuan" value="{{ old('kemajuan') }}" required>

                                @if ($errors->has('kemajuan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kemajuan') }}</strong>
                                    </span>
                                @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('dapatan') ? ' has-error' : '' }}">
                            <label for="dapatan" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                            <div class="col-md-6">
                                <input id="dapatan" type="dapatan" class="form-control" name="dapatan" value="{{ old('dapatan') }}" required>

                                @if ($errors->has('dapatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dapatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('huraianAktiviti') ? ' has-error' : '' }}">
                            <label for="huraianAktiviti" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                        <div class="col-md-6">
                                <input id="huraianAktiviti" type="huraianAktiviti" class="form-control" name="huraianAktiviti" value="{{ old('huraianAktiviti') }}" required>

                                @if ($errors->has('huraianAktiviti'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('huraianAktiviti') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('pelan') ? ' has-error' : '' }}">
                            <label for="pelan" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                        <div class="col-md-6">
                                <input id="pelan" type="pelan" class="form-control" name="pelan" value="{{ old('pelan') }}" required>

                                @if ($errors->has('pelan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pelan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('komen') ? ' has-error' : '' }}">
                            <label for="komen" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                        <div class="col-md-6">
                                <input id="komen" type="komen" class="form-control" name="komen" value="{{ old('komen') }}" required>

                                @if ($errors->has('komen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('komen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="panel panel-info">
                        <div class="panel-heading">Untuk Penyelia</div>
                        <div class="form-group{{ $errors->has('komenPenyelia') ? ' has-error' : '' }}">
                            <label for="komenPenyelia" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>


                            <div class="col-md-6">
                                <input id="komenPenyelia" type="komenPenyelia" class="form-control" name="komenPenyelia" value="{{ old('komenPenyelia') }}" required>

                                @if ($errors->has('komenPenyelia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('komenPenyelia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                            <div class="form-group{{ $errors->has('KemajuanPelajar') ? ' has-error' : '' }}">
                            <label for="KemajuanPelajar" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                            <div class="col-md-6">
                                <input id="KemajuanPelajar" type="KemajuanPelajar" class="form-control" name="KemajuanPelajar" value="{{ old('KemajuanPelajar') }}" required>

                                @if ($errors->has('KemajuanPelajar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('KemajuanPelajar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                            <div class="form-group{{ $errors->has('pelanKajian') ? ' has-error' : '' }}">
                            <label for="pelanKajian" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                            <div class="col-md-6">
                                <input id="pelanKajian" type="pelanKajian" class="form-control" name="pelanKajian" value="{{ old('pelanKajian') }}" required>

                                @if ($errors->has('pelanKajian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pelanKajian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-success">
                                    Hantar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
