@extends('layouts.app')

@section('content')
<!-- <script type="text/javascript" src="//cdnjs.cloundflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloundflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"> -->
<head>
	<title></title>
</head>

<body>
	<div class="container">
	<h2>Upload Tugasan</h2>  
	<form class='form-horizontal' method="POST" action="{{ action('TugasanController@insertFile')}}" enctype="multipart/form-data">
	{{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="namaTugasan">Nama Tugasan:</label>
    <div class="col-sm-10">
      <input type="text" name="namaTugasan" class="form-control" id="namaTugasan" placeholder="Masukkan Nama Tugasan" value="{{ old('namaTugasan') }}" required autofocus>
      @if ($errors->has('namaTugasan'))
      		<span class-"help-block">
      		<strong>{{ $errors->first('namaTugasan') }}</strong>
      		</span>
      		@endif
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dokumen">Upload:</label>
    <div class="col-sm-10">
      <input type="file" name="dokumen" class="dokumen">
      	 @if ($errors->has('dokumen'))
      		<span class-"help-block">
      		<strong>{{ $errors->first('dokumen') }}</strong>
      		</span>
      		@endif
    </div>
  </div>
  <
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
  </div> 
  </form>
  <script>
  // @if(Session::has('message'))
   // var type = "{{ Session::get('alert-type', 'info') }}";
   // switch(type){
   //  case'success':
   //    toastr.success("{{ Session::get('message') }}");
      // break;

      // case 'error':
      // toastr.error("{{ Session::get('message') }}");
      // break;
   // }
   // @endif
   </script>
</div>
</body>
@endsection