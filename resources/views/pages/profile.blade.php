@extends('layouts.prof')

@section('style')
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
@endsection

@section('content')
    <div class="text-center" style="font-family: Gilroy">
        <h1 href="" >
            @if (auth()->user())
			    {{auth()->user()->name}}

			@else Guest
			@endif
        </h1>
        <br>
        <h3>
            Email: {{$user->email}}
        </h3>
        <br>
        <h3>
            Nama: {{$user->name}}</h3>
        <br>
        <a href="{{route('ganti')}}" class="btn btn-danger">Ganti Password</a>
        <br>
        <br>
        <form action="{{route('deleteuser')}}" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="{{$user->id}}">
            <button type="submit" class="btn btn-danger">Hapus Akun</button>
        </form>
    </div>
@endsection