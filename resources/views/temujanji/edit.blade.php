@extends('layout')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/temujanji') }}">Events</a></li>
			<li class="active">Edit - {{ $temujanji->aktiviti }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		@if($errors)
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		@endif
		
		<form action="{{ url('temujanji/' . $temujanji->id) }}" method="POST">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PUT" />
			<div class="form-group @if($errors->has('nama')) has-error has-feedback @endif">
				<label for="nama">Your Name</label>
				<input type="text" class="form-control" name="nama" value="{{ $temujanji->nama }}" placeholder="E.g. Pisyek">
				@if ($errors->has('nama'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('nama') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('aktiviti')) has-error has-feedback @endif">
				<label for="aktiviti">Title</label>
				<input type="text" class="form-control" name="aktiviti" value="{{ $temujanji->aktiviti }}" placeholder="E.g. My event's title">
				@if ($errors->has('aktiviti'))
					<p class="help-block"><span class="glyphicon glyphicon-exclamation-sign"></span> 
					{{ $errors->first('aktiviti') }}
					</p>
				@endif
			</div>
			<div class="form-group @if($errors->has('time')) has-error @endif">
				<label for="time">Masa</label>
				<div class="input-group">
					<input type="text" class="form-control" name="time" value="{{ $temujanji->masaMula . ' - ' . $temujanji->masaAkhir }}" placeholder="Select your time">
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
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>		
	</div>
</div>
@endsection

@section('js')
<!-- <script src="{{ url('_asset/js') }}/daterangepicker.js"></script> -->
<script type="text/javascript">
$(function () {
	$('input[name="time"]').daterangepicker({
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