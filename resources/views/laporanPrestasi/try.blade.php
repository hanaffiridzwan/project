@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

     <table class="table table-user-information">
          <tbody>
@foreach($pelajar as $plr)
            <tr>
              <td>Nama: </td>
              <td>{{ $plr ->nama}}</td>
            </tr></tbody></table></div>
            @endforeach


            @endsection