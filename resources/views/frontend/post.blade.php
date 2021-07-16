@php($title = $post->title)
@extends('layout.main')
@section('custom-library')
@endsection
@section('content')
    <div class="container">
        <style>
            table {
                text-align: center;
                width: 100%;
            }

            table td {
                padding: 10px;
            }

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
        <h2 class="text-danger text-uppercase">T{{$post->title}}</h2>
        <small><i>Ngày đăng: {{$post->created_at}}</i></small>
        <hr>
        <div class="contenter">
            {!! $post->content !!}
        </div>
@endsection
