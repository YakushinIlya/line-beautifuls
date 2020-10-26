@extends('layouts.index')

@section('title'){{$head}}@endsection
@section('description'){{$message}}@endsection
@section('keywords'){{$message}}@endsection

@section('head')
    {{ $head }}
@endsection

@section('content')
    {!! $message !!}
@endsection
