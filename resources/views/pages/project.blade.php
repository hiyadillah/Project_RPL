@extends('layouts.base-login')
@section('style')
    <link rel="stylesheet" href="{{asset('css/setail.css')}}">
@endsection

@section('content')
<div class="jumbotron" style="margin-top: 3cm; font-family: Gilroy;">
    <img src="{{$projects->image_path}}" alt="">
    <hr class="my-4">
    <h2>Deskripsi</h2>
    <h4>{{$projects->description}}</h4>
    <br>
    <h3>Pendaftaran akan ditutup pada {{$projects->expired}}</h3>
    <br>
    <h3>Creator: {{$projects->creator->name}}</h3>
    <h3></h3>
</div>
@endsection