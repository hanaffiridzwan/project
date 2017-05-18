@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borang Penyelian</div>
                <div class="panel panel-default">
    <div class="panel-heading">
       <a href="{{ url('/borangPenyelian/create') }}" class="btn btn-info pull-center"
                    role="button">Borang Penyelian Baru</a></h2>
                                    </div>

            <div class="row">
                <div class="col-lg-12">
                    @if($borangPenyelians->count() > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>    
                                <th>#</th>
                                <th>Nama</th>
                                <th>Laporan Perjumpaan Terkini</th>
                                <th>Tarikh</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;?>
                        @foreach($borangPenyelians as $borangPenyelian)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $borangPenyelian->nama }}</td>
                            <td>{{ $borangPenyelian->laporanPerjumpaan}}</td>
                            <td>{{ $borangPenyelian->tarikhPerjumpaan}}</td>
                            <td>
                            <a class="btn btn--primary btn-xs" href="{{ ('borangpenyelian/' .$borangPenyelian->id. 'edit/' ) }}">
                            <span class="glyphicon-edit"></span>Edit</a>
                            <form action="{{ url('borangpenyelian/' .$borangPenyelian->id) }}" style="display:inline" method="POST">
                            <input type="hidden" name="_method" value="DELETE" />
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span>Delete</button>

                            </form>
                            </td>
                            </tr>
                            
                            @endforeach      
                        </tbody>
                       </table>
                       @else
                       <h2>Tiada maklumat lagi!</h2>
                    @endif
                    </div>
                </div>

                <!-- <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

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
                         <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">User Categories</label>
                             <div class="col-md-6">
                                 <select name="category" id="category">
                                 <option value="" disabled>Please Select</option>
                                 <option value="lecturer">Lecturer</option>
                                 <option value="student">Student</option>
                                 </select></div></div>
                               <div class="form-group{{ $errors->has('kos') ? ' has-error' : '' }}">
                            <label for="kos" class="col-md-4 control-label">Kos</label>

                            <div class="col-md-6">
                                <input id="kos" type="kos" class="form-control" name="kos" value="{{ old('kos') }}" required>

                                @if ($errors->has('kos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kos') }}</strong>
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
                         <div class="form-group{{ $errors->has('laporanPerjumpaan') ? ' has-error' : '' }}">
                            <label for="laporanPerjumpaan" class="col-md-4 control-label">Laporan Perjumpaan</label>

                            <div class="col-md-6">
                                <input id="laporanPerjumpaan" type="laporanPerjumpaan" class="form-control" name="laporanPerjumpaan" value="{{ old('laporanPerjumpaan') }}" required>

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
                                <input id="tarikhPerjumpaan" type="tarikhPerjumpaan" class="form-control" name="tarikhPerjumpaan" value="{{ old('tarikhPerjumpaan') }}" required>

                                @if ($errors->has('tarikhPerjumpaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tarikhPerjumpaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                         <div class="form-group{{ $errors->has('perjalananObjektif') ? ' has-error' : '' }}">
                            <label for="perjalananObjektif" class="col-md-4 control-label">Perjalanan Objektif</label>

                            <div class="col-md-6">
                                <input id="perjalananObjektif" type="perjalananObjektif" class="form-control" name="perjalananObjektif" value="{{ old('perjalananObjektif') }}" required>

                                @if ($errors->has('perjalananObjektif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perjalananObjektif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group{{ $errors->has('objektif') ? ' has-error' : '' }}">
                            <label for="objekti" class="col-md-4 control-label">Objektif</label>

                            <div class="col-md-6">
                                <input id="objektif" type="objektif" class="form-control" name="objektif" required>

                                @if ($errors->has('objektif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objektif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
</div> -->
@endsection
