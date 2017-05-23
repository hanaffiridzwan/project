@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            <img src="{{ ('/images/ukm.jpg') }}" width="200" height="150"
            class="col-md-4 col-md-offset-2">
           
                <div class="lead">Borang Rekod Penyelian</div>
                    <div class="col-md-8 col-md-offset-2">
                    <form class="form-horizontal" method="post" action="{{ action('borangPenyeliansController@store') }}" role="form"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="panel panel-info">
                        <div class="panel-heading">Maklumat Diri</div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Pelajar</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('noMatrik') ? ' has-error' : '' }}">
                            <label for="noMatrik" class="col-md-4 control-label">No Matrik</label>

                            <div class="col-md-6">
                                <input id="noMatrik" type="noMatrik" class="form-control" name="noMatrik" value="{{ old('noMatrik') }}" required>

                                @if ($errors->has('noMatrik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noMatrik') }}</strong>
                                    </span>
                                @endif
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
                               <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="program" class="col-md-4 control-label">Program</label>

                            <div class="col-md-6">
                                <input id="program" type="program" class="form-control" name="program" value="{{ old('program') }}" required>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
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
                                        <strong>{{ $errors->first('nama Penyelia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="panel-heading">Laporan</div>
                         <div class="form-group{{ $errors->has('laporanPerjumpaan') ? ' has-error' : '' }}">
                            <label for="laporanPerjumpaan" class="col-md-4 control-label">Laporan Perjumpaan Terkini</label>

                            <div class="col-md-6">
                                <textarea id="laporanPerjumpaan" type="laporanPerjumpaan" rows="6" class="form-control" name="laporanPerjumpaan" maxlength="500" value="{{ old('laporanPerjumpaan') }}" required></textarea>

                                @if ($errors->has('laporanPerjumpaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('laporanPerjumpaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('tarikhPerjumpaan') ? ' has-error' : '' }}">
                            <label for="tarikhPerjumpaan" class="col-md-4 control-label">Tarikh Perjumpaan</label>

                            <div class="col-md-6">
                                <input id="tarikhPerjumpaan" type="date" class="form-control" name="tarikhPerjumpaan" value="{{ old('tarikhPerjumpaan') }}" required>

                                @if ($errors->has('tarikhPerjumpaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tarikhPerjumpaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('perjalananObjektif') ? ' has-error' : '' }}">
                            <label for="perjalananObjektif" class="col-md-4 control-label">Perjalanan objektif pada perjumpaan lepas</label>

                            <div class="col-md-6">
                                <textarea id="perjalananObjektif" rows="6" type="perjalananObjektif" class="form-control" name="perjalananObjektif" maxlength="500" value="{{ old('perjalananObjektif') }}" required></textarea>

                                @if ($errors->has('perjalananObjektif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perjalananObjektif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="panel-heading">Perjumpaan seterusnya</div>
                        <div class="form-group{{ $errors->has('objektif') ? ' has-error' : '' }}">
                            <label for="objektif" class="col-md-4 control-label">Pelajar:Objektif yang dipersetujui untuk dilakukan sebelum perjumpaan seterusnya:</label>

                            <div class="col-md-6">
                                <textarea id="objektif" rows="6" type="objektif" class="form-control" name="objektif" maxlength="500" required></textarea>

                                @if ($errors->has('objektif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objektif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tarikhPerjumpaanSeterusnya') ? ' has-error' : '' }}">
                         <label for="tarikhPerjumpaanSeterusnya" class="col-md-4 control-label">Tarikh Perjumpaan Seterusnya:</label>

                            <div class="col-md-6">
                                <input id="tarikhPerjumpaanSeterusnya" type="date" class="form-control" name="tarikhPerjumpaanSeterusnya" required>

                                @if ($errors->has('tarikhPerjumpaanSeterusnya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tarikhPerjumpaanSeterusnya') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-success">
                                    Sah
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
