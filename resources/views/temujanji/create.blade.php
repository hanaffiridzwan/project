@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>Anda di sini: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/temujanji') }}">Temujanji</a></li>
			<li class="active">Tambah temujanji baru</li>
		</ol>
	</div>
</div>
<!-- 
@include('layouts.message') -->

<div class="row">
	<div class="col-lg-6">
		
		<form class="form-horizontal" method="post" action="{{ action('TemujanjiController@store') }}"  enctype="multipart/form-data">
		<!-- <form action="{{ action('TemujanjiController@store') }}" method="POST"> -->
			{{ csrf_field() }}
			<div class="form-group @if($errors->has('nama')) has-error has-feedback @endif">
			
				<label for="nama" >Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="E.g. Hanaffi" value="{{ old('nama') }}" >
				@if ($errors->has('nama'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('nama') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('aktiviti')) has-error has-feedback @endif">
				<label for="aktiviti">Aktiviti</label>
				<input type="text" class="form-control" name="aktiviti" placeholder="E.g. Perjumpaan Format Thesis" value="{{ old('aktiviti') }}">
				@if ($errors->has('aktiviti'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('aktiviti') }}
					</p>
				@endif
			</div>
			<div class="form-group"> 
			@if($errors->has('time')) has-error @endif
				<label  for="time">Masa</label>
				<div class="input-group">

					<input type="text" class="form-control" name="time" placeholder="Select your time" value="{{ old('time') }}">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
                    </span>
				</div>
				@if ($errors->has('time'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('time') }}
					</p>
				@endif
			</div>
			<button type="submit" class="btn btn-success">Hantar</button>
		</form>	
		</div>
		</div>
		</div>
			
	</div>
</div>
@endsection

@section('js')
	
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
		"minDate": moment('<?php echo date('Y-m-d G')?>'),
		"timePicker": true,
		"timePicker24Hour": true,
		"timePickerIncrement": 15,	
		"autoApply": true,
		"locale": {
			"format": "DD/MM/YYYY HH:mm:ss",
			"separator": " - ",
		}
	});
});
</script> 
@endsection