@extends('layouts.app')

@section('content')
<head>         
  <tr>
    <th>Nama Pelajar</th>
    <th>Kategori Pelajar</th>
  </tr>
    @foreach($pelajar as $plj)
  <tr>

  

    <td>{{$plj->user_id}}</td>
    <td></td>
    <td></td>
  </tr>

</table> 
  @endforeach
  @endsection