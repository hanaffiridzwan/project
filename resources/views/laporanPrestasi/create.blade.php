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
                                <input id="namaPelajar" type="namaPelajar" class="form-control" name="namaPelajar" value="{{ old('namaPelajar') }}" >

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
                                <input id="namaPenyelia" type="namaPenyelia" class="form-control" name="namaPenyelia" value="{{ old('namaPenyelia') }}" >

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
                                <input id="tarikh" type="tarikh" class="form-control" name="tarikh" value="{{ old('tarikh') }}" >

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
                                <input id="tajukKajian" type="tajukKajian" class="form-control" name="tajukKajian" value="{{ old('tajukKajian') }}" >

                                @if ($errors->has('tajukKajian'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tajukKajian') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('kemajuan') ? ' has-error' : '' }}">
                            <label for="kemajuan" class="col-md-4 control-label">Sila huraikan kemajuan projek anda sepanjang 6 bulan ini:</label>

                            <div class="col-md-6">
                                <textarea id="kemajuan" type="kemajuan" rows="6" class="form-control" name="kemajuan" value="{{ old('kemajuan') }}" maxlength="500" ></textarea>

                                @if ($errors->has('kemajuan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kemajuan') }}</strong>
                                    </span>
                                @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('dapatan') ? ' has-error' : '' }}">
                            <label for="dapatan" class="col-md-4 control-label">Sila senaraikan, hasil kerja yang telah dihasilkan sepanjang 6 bulan ini( contoh. draf tesis, pelan kajian, keratan journal dll: </label>

                            <div class="col-md-6">
                                <textarea id="dapatan" type="dapatan" rows="6"class="form-control" name="dapatan" value="{{ old('dapatan') }}" maxlength="6" ></textarea>

                                @if ($errors->has('dapatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dapatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('huraianAktiviti') ? ' has-error' : '' }}">
                            <label for="huraianAktiviti" class="col-md-4 control-label">Terangkan secara ringkas pelan kajian terkini anda. Apakah aktiviti yang telah anda rancang untuk 6 bulan akan datang? Apakah pelan yang akan anda bentangkan?</label>

                        <div class="col-md-6">
                                <textarea id="huraianAktiviti" rows="6" type="huraianAktiviti" class="form-control" name="huraianAktiviti" value="{{ old('huraianAktiviti') }}" maxlength="500" ></textarea>

                                @if ($errors->has('huraianAktiviti'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('huraianAktiviti') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('pelan') ? ' has-error' : '' }}">
                            <label for="pelan" class="col-md-4 control-label">Adakah anda berada dalam landasan yang betul berdasarkan jadual pelan anda? Huraikan </label>

                        <div class="col-md-6">
                                <textarea id="pelan" type="pelan" rows="6" class="form-control" name="pelan" value="{{ old('pelan') }}" maxlength="500"></textarea>

                                @if ($errors->has('pelan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pelan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('komen') ? ' has-error' : '' }}">
                            <label for="komen" class="col-md-4 control-label">Sila masukkan komen anda disini:</label>

                        <div class="col-md-6">
                                <textarea id="komen" rows="6" type="komen" class="form-control" name="komen" value="{{ old('komen') }}" maxlength="500" ></textarea>

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
                            <label for="komenPenyelia" class="col-md-4 control-label">Sila komen tentang kemajuan pelajar termasuklah sebarang masalah dan pengalaman dan tindakan yang wajar diambil </label>


                            <div class="col-md-6">
                                <textarea id="komenPenyelia" rows="6" type="komenPenyelia" class="form-control" name="komenPenyelia" value="{{ old('komenPenyelia') }}" maxlength="500" ></textarea>

                                @if ($errors->has('komenPenyelia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('komenPenyelia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                            <div class="form-group{{ $errors->has('KemajuanPelajar') ? ' has-error' : '' }}">
                            <label for="KemajuanPelajar" class="col-md-4 control-label">Kemajuan sepanjang 6 bulan</label>

                            <div class="col-md-6">
                                <textarea id="KemajuanPelajar" rows="6" type="KemajuanPelajar" class="form-control" name="KemajuanPelajar" value="{{ old('KemajuanPelajar') }}" maxlength="500"></textarea>

                                @if ($errors->has('KemajuanPelajar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('KemajuanPelajar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                            <div class="form-group{{ $errors->has('pelanKajian') ? ' has-error' : '' }}">
                            <label for="pelanKajian" class="col-md-4 control-label">Adakah kajian ini mengikut landasan yang betul? </label>

                            <div class="col-md-6">
                                <textarea id="pelanKajian" type="textarea" cols="50" rows="6" class="form-control" name="pelanKajian" value="{{ old('pelanKajian') }}" maxlength="500" ></textarea>

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
