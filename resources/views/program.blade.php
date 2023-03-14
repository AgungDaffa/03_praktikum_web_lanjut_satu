@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="text-center">
<h1>Profil</h1>
</div>
    
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> -->
        <div class="text-center">
        <h2>Nama saya Agung Afrizal Daffa </h2>
        <h2>Rumah saya di Jawa</h2>
        <h2>Saya kuliah Di poltex</h2>
        </div>
        
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')
<div class="row justify-content-center" ><p>2141720110|Agung Afrizal Daffa.</p></div>
    
@stop