@extends('layouts.app')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">
			<li>You are here: <a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('/temujanji') }}">Events</a></li>
			<li class="active">{{ $temujanji->aktiviti }}</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<h2>{{ $temujanji->aktiviti }} <small>booked by {{ $temujanji->nama }}</small></h2>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		
		<p>Time: <br>
		{{ date("g:ia\, jS M Y", strtotime($temujanji->masaMula)) . ' until ' . date("g:ia\, jS M Y", strtotime($temujanji->masaAkhir)) }}
		</p>

		
		
		
		
		
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