@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

            @if($errors)
            @foreach(@errors->all() as $error)
            <p>{{ @error }}</p>
            @endforeach
        @endif

            <img src="{{ ('/images/ukm.jpg')}}" width="200" height="150" class="col-md-4 col-md-offset-2">
                <label class="lead" >Laporan Prestasi Pelajar</label>
                 <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" method="post" action="{{ action('laporanPrestasisController@update' .$laporanPrestasi->id) }}" role="form"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                         <div class="panel panel-info">
                        }
                        }
                        <div class="panel-heading">Maklumat laporan</div>
                        <div class="form-group{{ $errors->has('namaLaporan') ? ' has-error' : '' }}">
                            <label for="namaLaporan" class="col-md-4 control-label">Nama Laporan</label>

                            <div class="col-md-6">
                                <input id="namaLaporan" type="text" class="form-control" name="namaLaporan" value="{{ old('namaLaporan') }}" required autofocus>

                                @if ($errors->has('namaLaporan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaLaporan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <!--  <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">User Categories</label>
                             <div class="col-md-6">
                                 <select name="category" id="category">
                                 <option value="" disabled>Please Select</option>
                                 <option value="lecturer">Lecturer</option>
                                 <option value="student">Student</option>
                                 </select></div></div> -->
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
                         <div class="panel panel-info">
                        <div class="panel-heading">Hasil Penyelian</div>
                         <div class="form-group{{ $errors->has('rumusan') ? ' has-error' : '' }}">
                            <label for="rumusan" class="col-md-4 control-label">Rumusan</label>

                            <div class="col-md-6">
                                <input id="rumusan" type="rumusan" class="form-control" name="rumusan" value="{{ old('rumusan') }}" required>

                                @if ($errors->has('rumusan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rumusan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('markah') ? ' has-error' : '' }}">
                            <label for="markah" class="col-md-4 control-label">markah</label>

                            <div class="col-md-6">
                                <input id="markah" type="markah" class="form-control" name="markah" value="{{ old('markah') }}" required>

                                @if ($errors->has('markah'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('markah') }}</strong>
                                    </span>
                                @endif
                            
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <a href="{{ action('laporanPrestasisController@index') }}" class="btn btn-default">Batal</a>
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
