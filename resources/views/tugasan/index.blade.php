@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                <h1>Tugasan</h1>
                    <form class="form-horizontal" method="post" "file"=true enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('namaTugasan') ? ' has-error' : '' }}">
                            <label for="namaTugasan" class="col-md-4 control-label">Nama Tugasan</label>

                            <div class="col-md-6">
                                <input id="namaTugasan" type="text" class="form-control" name="namaTugasan" value="{{ old('namaTugasan') }}" required autofocus>

                                @if ($errors->has('namaTugasan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaTugasan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jenisTugasan') ? ' has-error' : '' }}">
                            <label for="jenisTugasan" class="col-md-4 control-label">Jenis Tugasan</label>

                            <div class="col-md-6">
                                <input id="jenisTugasan" type="text" class="form-control" name="jenisTugasan" value="{{ old('jenisTugasan') }}" required>

                                @if ($errors->has('jenisTugasan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenisTugasan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dokumen') ? ' has-error' : '' }}">
                            <label for="dokumen" class="col-md-4 control-label">Dokumen</label>

                            <div class="col-md-6">
                                <input id="dokumen" type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}" required>

                                @if ($errors->has('dokumen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dokumen') }}</strong>
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
