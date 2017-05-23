@extends('layouts.app')

@section('content')

<div class="row">
	<div clss="col-lg-12">
		<ol class="breadcrumb">

			<li>Anda di sini: <a href="{{ url('/') }}">Home</a></li>
			<li class="active"><a href="{{ url('/temujanji') }}">Temujanji</a></li>
					
		</ol>
	</div>
</div>



<div class="row">
	<div class="col-lg-12">
		@if($temujanjis->count() > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Aktiviti</th>
					<th>Nama</th>
					<th>Tarikh mula</th>
					<th>Tarikh Akhir</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php $i = 1;?>
			@foreach($temujanjis as $temujanji)
				<tr>
					<th scope="row">{{ $i++ }}</th>
					<td><a href="{{ action('TemujanjiController@show' , $temujanji->id) }}">{{ $temujanji->aktiviti }}</a></td>
					<td>{{ $temujanji->nama }}</td>
					<td>{{ date("g:ia\, jS M Y", strtotime($temujanji->masaMula)) }}</td>
					<td>{{date("g:ia\, jS M Y", strtotime($temujanji->masaAkhir)) }}</td>
					<!--  -->
					<td>
<form action="{{ action('TemujanjiController@simpan', $temujanji->id) }}" method="POST">
{{ csrf_field() }}
@if ($temujanji->pengesahan == 'Dipertimbangkan')
<button name="pengesahan" id="pengesahan" type="submit" class="btn btn-success btn-sm" value="Terima">Terima</button>

<button name="pengesahan" id="pengesahan" type="submit" class="btn btn-danger btn-sm" value="Tolak">Tolak</button>
<input type="hidden" name="temujanji_id" value="{{ $temujanji->id }}">
</td>
@endif
@if ($temujanji->pengesahan == 'Terima')
{{$temujanji->pengesahan }}
@endif
@if ($temujanji->pengesahan == 'Tolak')
{{$temujanji->pengesahan }}
@endif
</form>
					<td>

						<a class="btn btn-primary btn-xs" href="{{ action('TemujanjiController@edit' , $temujanji->id)}}">
							<span class="glyphicon glyphicon-edit"></span> Edit</a> 
						<form action="{{ url('temujanji/' . $temujanji->id) }}" style="display:inline" method="POST">
							<input type="hidden" name="_method" value="DELETE" />
							{{ csrf_field() }}
							<button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
						</form>
						
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		@else
			<h2>Tiada Temujanji lagi!</h2>
			
		@endif
		<td><a href ="{{ url('/temujanji/create') }}" class="btn btn-info pull-center"
                    role="button">Buat temujanji</a></td>
	</div>
</div>
@endsection
