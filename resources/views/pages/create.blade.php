@extends('layouts.base-login')
@section('style')
    <link rel="stylesheet" href="{{asset('css/setail.css')}}">
@endsection

@section('content')
<div class="global-container">
    <div class="card login-form" style="margin-top: 5cm">
        <div class="card-body">
            <h2 class="card-title">Project Baru</h2>
            <div class="card-body">
                <form method="POST" action="{{route('registerPro')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="InputProject">Nama Project</label>
                        <input name="name" type="name" class="form-control form-control-sm" id="InputProject" placeholder="Masukkan Nama Project">
                    </div>
                
                    <div class="form-group">
                        <label for="InputDesc">Deskripsi</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Masukkan Deskripsi Project"></textarea>
                    </div>
                
                    <div class="form-group">
                        <label for="InputExp">Tanggal Tutup Project</label>
                        <input name="expired" type="date" class="form-control form-control-sm" id="InputExp" placeholder="Masukkan Tanggal Tutup Project">
                    </div>

                    <div class="form-group">
                        <label for="photo">Foto/Logo</label>
                        <input name="image" type="file" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-outline-danger btn-block">Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection