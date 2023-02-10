@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')

<br>
    <main class="container-fluid carousel-home">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('storage/images/carousel_in_Home/11.jpeg') }}" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('storage/images/carousel_in_Home/22.jpeg') }}" class="d-block w-70" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ url('storage/images/carousel_in_Home/33.jpeg') }}" class="d-block w-70" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em"><use href="#toggles2"></use></svg>
            </div>
            <div>
                <h3 class="fs-2">Категории</h3>
                <p>Content</p>
                <a href="/category" class="btn btn-primary">
                    Категории »
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em"><use href="#cpu-fill"></use></svg>
            </div>
            <div>
                <h3 class="fs-2">Товары</h3>
                <p>Content</p>
                <a href="/item" class="btn btn-primary">
                    Товары »
                </a>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em"><use href="#tools"></use></svg>
            </div>
            <div>
                <h3 class="fs-2">Про нас</h3>
                <p>Content</p>
                <a href="/about" class="btn btn-primary">
                   Про нас »
                </a>
            </div>
        </div>
    </div>
    @endsection
