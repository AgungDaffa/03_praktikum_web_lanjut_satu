@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="text-center">
<h1>Pengalaman Kuliah</h1>
</div>
    
@stop

@section('content')
<div class="container">
    <div>
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
<h2>Ya awalnya saya coba coba, lah kok enak ya keterusan kuliah disini <br>
        walupun masih tidak ada pasangan tapi masih dapat banyak teman <br>
        sekian thx</h2>
<h2></h2>
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