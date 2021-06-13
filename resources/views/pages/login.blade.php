@extends('layouts.base')

@section('style')
    <link rel="stylesheet" href="{{asset('css/setail.css')}}">
@endsection
@section('content')
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title">Masuk Akun</h2>
            <div class="card-text">
                @if (session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
                <form method="POST" action="{{route('authLogin')}}">
                    @csrf
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm" id="InputEmail" placeholder="Masukkan Email">
                    </div>

                    <div class="form-group">
                        <label for="InputPass">Password</label>
                        <input name="password" type="password" class="form-control form-control-sm" id="InputPass" placeholder="Masukkan Password">
                    </div>

                    <button type="submit" class="btn btn-outline-danger btn-block">Masuk</button>

                    <div class="singup">
                        Belum punya akun? <a href="{{route('auth.register')}}">Daftar Sekarang</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection