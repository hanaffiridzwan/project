@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laporan Prestasi</div>
                <div class="panel panel-default">
    <!-- <div class="panel-heading"> -->
      
                                    
                <div class="row">
                    <div class="col-lg-12">
                        @if($laporanPrestasis->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pelajar</th>
                                    <th>Tajuk Kajian</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php $i =1;?>
                        @foreach($laporanPrestasis as $laporanPrestasi)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>

                            <td><{{ $laporanPrestasi->namaPelajar }}</td>
                            <td>{{ $laporanPrestasi->tajukKajian }}</td>
                          
                         
                            <td>
                                <a class-"btn btn-primary btn-xs" href="{{action('laporanPrestasisController@edit' , $laporanPrestasi->id) }}" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                      
                                @endforeach
                                </tr>
                            </tbody>
                            </table>
                        @else 
                        <h2>Tiada Maklumat lagi!</h2>
                            </div>
                        @endif
                       
                        <a href="{{ url('/laporanPrestasi/create') }}" class="btn btn-info pull-center"  role="button">Laporan Baru</a></h2>
                    </div>
                    </div>
                   <!--  <script src="{{ asset('js/warning.js') }}"></script> -->
                        @endsection


                
