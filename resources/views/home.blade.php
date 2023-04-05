@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <ul>
        @foreach ($wow as $data)
        <li>
            {{$data -> id}}
            {{$data -> nama}}
            {{$data -> kelas}}
            {{$data -> alamat}}   
            <br><br>     
        </li>
        @endforeach
    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> alert("Hello everyone :)") </script>
@stop
@section('footer')
<div class="row justify-content-center" ><p>2141720110|Agung Afrizal Daffa.</p></div>
    
@stop