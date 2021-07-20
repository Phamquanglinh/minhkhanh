@extends('errors.layout')

@php
    $error_number = 400;
@endphp

@section('title')
    Bad request.
@endsection

@section('description')
    @php
        $default_error_message = "Xin <a href='javascript:history.back()''>quay lại</a> hoặc về <a href='".url('')."'>Trang chủ</a>.";
    @endphp
    {!! isset($exception)? ($exception->getMessage()?$exception->getMessage():$default_error_message): $default_error_message !!}
@endsection
