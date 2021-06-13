@extends('layouts.base')
@section('style')
    <link rel="stylesheet" href="{{asset('css/setail.css')}}">
@endsection

@section('content')
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title">Daftar Akun</h2>
            <div class="card-text">
                <form method="POST" action="{{route('authRegister')}}">
                    @csrf
                    <div class="form-group">
                        <label for="InputNama">Nama</label>
                        <input name="name" type="text" class="form-control form-control-sm" id="InputNama" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input name="email" type="email" class="form-control form-control-sm" id="InputEmail" placeholder="Masukkan Email">
                    </div>

                    <div class="form-group">
                        <label for="InputPass">Password</label>
                        <input name="password" type="password" class="form-control form-control-sm" id="InputPass" placeholder="Masukkan Password">
                    </div
>
                    <button type="submit" class="btn btn-outline-danger btn-block">Daftar</button>

                    <div class="singup">
                        Sudah punya akun? <a href="{{route('auth.login')}}">Masuk</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection