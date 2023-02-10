@extends('layout')

@section('title')@endsection

@section('main_content')
    @foreach($items as $item)
        <br><b>{{ $item->name }}</b>
    @endforeach
@endsection
