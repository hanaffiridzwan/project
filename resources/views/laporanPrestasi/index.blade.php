@include('modal.destroy-modal')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laporan Prestasi</div>
                <div class="panel panel-default">
    <!-- <div class="panel-heading"> -->
      
                                    </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if($laporanPrestasis->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tajuk Kajian</th>
                                    <th>Nama Pelajar</th>
                                    <th></th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php $i =1;?>
                        @foreach($laporanPrestasis as $laporanPrestasi)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $laporanPrestasi->tajukKajian }}</td>
                            <td>{{ $laporanPrestasi->namaPelajar }}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="{{action('laporanPrestasisController@edit' , $laporanPrestasi->id) }}" class-"btn btn-primary btn-sm">Edit</a>
                                <a href="{{ action('laporanPrestasisController@destroy', $laporanPrestasi->id) }}" class="btn btn-danger btn-sm" id="confirm-modal">Padam</a> 
                                @endforeach
                                </tr></td>
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


                
