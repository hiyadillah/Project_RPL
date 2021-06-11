@extends('layouts.base-login')
@section('style')
    <link rel="stylesheet" href="{{asset('css/setail.css')}}">
@endsection

@section('content')
    <div class="row" style="padding: 5px; margin-top: 3cm;">
        @foreach ($projects as $item)
        <div class="col">
          <div class="card" style="width: 17rem; padding: 15px; height: 30rem;">
            <img src="{{$item->image_path}}" class="card-img-top" alt="..." style="width: 15rem; height: 15rem;">
            <div class="card-body overflow-auto">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text">{{$item->description}}</p>
              
              <a href="{{route('lihatpro', ['id' => $item->id])}}" class="btn btn-danger">Lihat!</a>
            </div>
          </div>
        </div>
        @endforeach
      
    </div>
@endsection