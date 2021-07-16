@php($title = "Khuyến cáo")
@extends('layout.main')
@section('custom-library')
@endsection
@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row pb-5">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <img src="{{env("app_url")."/".$post->thumbnail}}"
                         alt="{{$post->title}}"
                         class="w-100 pb-4 pb-sm-0">
                </div>
                <div class="col-12 col-sm-6 col-md-9 col-lg-9 col-xl-9 pb-3 pb-sm-0">
                    <h4 class="text-uppercase">{{$post->title}}</h4>
                    <p>"{{$post->description}}"</p>
                    <a class="btn btn-danger"
                       href="{{route("post",$post->slug)}}">Xem
                        thêm</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
