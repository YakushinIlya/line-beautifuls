@extends('layouts.admin')

@section('title'){{$title??config('app.name')}}@endsection

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content')
    @include('admin.content', ['content' => $content??'', 'title'=>$title??config('app.name')])
@endsection