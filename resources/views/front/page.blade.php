@extends('layouts.index')

@section('title'){{$title??$head}}@endsection
@section('description'){{$description}}@endsection
@section('keywords'){{$keywords}}@endsection

@section('head')
    {{ $head }}
@endsection

@section('content')
    {!! $body !!}
@endsection
