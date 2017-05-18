@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Laporan Prestasi</div>
                <div class="panel panel-default">
    <div class="panel-heading">
      <a href="{{ url('/laporanPrestasi/create') }}" class="btn btn-info pull-center"  role="button">Laporan Baru</a></h2>
                                    </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if($laporanPrestasis->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Laporan</th>
                                    <th>Nama Pelajar</th>
                                    <th></th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php $i =1;?>
                        @foreach($laporanPrestasis as $laporanPrestasi)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $laporanPrestasi->namaLaporan }}</td>
                            <td>{{ $laporanPrestasi->namaPelajar }}</td>
                            <td></td>
                             <a class="btn btn--primary btn-xs" href="{{ ('laporanPrestasi/' .$laporanPrestasi->id. 'edit/' ) }}">
                            <span class="glyphicon-edit"></span>Edit</a>
                            <form action="{{ url('laporanPrestasi/' .$laporanPrestasi->id) }}" style="display:inline" method="POST">
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
                        <h2>Tiada Maklumat lagi!</h2>
                            </div>
                        @endif
                    </div>
                    </div>
                        @endsection


                
