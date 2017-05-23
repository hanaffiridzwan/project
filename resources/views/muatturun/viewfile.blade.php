@extends('layouts.app')

@section('content')
<head>
<title></title>
</head>
<body>
		<div class="wrapper">
		
		<div class="panel-heading">
		Senarai Tugasan
		</div>

		<div class="panel-body">
		<table class="table table-bordered">
			<thead>	
				<th>Tajuk</th>
				<!-- <th>Tarikh upload</th> -->
				<th>#</th>
				</thead>
				
				<tbody>
				@foreach($downloads as $down)
				<tr>
					<td>{{$down->namaTugasan}}</td>
					<!-- <td>{{$down->user_id}}</td> -->
					<td>
						<a href="up_file/{{ $down->dokumen}}" download="{{$down->dokumen}}">
						<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">Download</i></button></a>
					</td>
				</tr>
				@endforeach
				</tbody>
				</table>
				</div>
				
</body>

@endsection