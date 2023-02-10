@extends('layout')

@section('title'){{$item->name}}@endsection

@section('main_content')
    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{ url('storage/images/'.$item->file_path) }}">
                            <div class="card-body">
                                <a href="/" class="link-dark"><b>{{$item->name}}</b></a>
                                <p class="card-text">{{$item->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                           <a href="{{ route('itemDelete', $item->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Удалить</button></a>
                                    </div>
                                    <small class="text-muted">{{$item->price}} грн</small>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
