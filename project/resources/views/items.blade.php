@extends('layout')

@section('title')Товары@endsection

@section('main_content')
<section class="items-content">
    <div class="container">
        <div class="row">
            @foreach($wrappers as $wrapper)
                <div class="col-lg-4 col-sm-6">
                    <div class="items-card">
                        <div class="items-thumb">
                            <a href="#"><img src="{{ url('storage/images/'.$wrapper->item->file_path) }}" alt=""></a>
                        </div>
                        <div class="items-details">
                            <h4><a href="/item/{{ $wrapper->item->id }}">{{$wrapper->item->name}}</a></h4>
                            <p>{{$wrapper->item->description}}</p>
                            <div class="items-bottom-details d-flex justify-content-between">
                                <div class="items-price">
                                    <small>$99</small> {{$wrapper->item->price}} грн
                                </div>
                                <div class="items-links">
                                    <a href="#">
                                        <i class="bi bi-cart-fill"></i>
                                    </a>
                                    <a href="#">
                                        <i class="bi bi-suit-heart-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
