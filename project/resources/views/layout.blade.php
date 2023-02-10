<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<nav class="navbar navbar-expand-lg" style="background: rgba(80,80,255,0.17)">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">RenieShop</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items">Все товары</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Категории
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $el)
                            <li><a class="dropdown-item" href="/itemsByCategoryId/{{ $el->id }}"> {{ $el->name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/category">Добавить категорию</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/review">Отзывы</a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false"><i class="bi bi-person-fill" style="font-size: 20px"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/private">Личный кабинет</a></li>
                            <li><a class="dropdown-item" href="/logout">Выйти</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item d-flex align-items-center">
                        <button class="btn btn-primary" href="/login">Вход</button>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart">
                        <i class="bi bi-cart-fill" style="font-size: 20px"></i>
                    </a>
                    <div class="modal fade" id="modal-cart" data-bs-backdrop="static" data-bs-keyboard="false"
                         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Корзина</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table"> {{--1 класс оборачивает содержимое--}}
                                        <tbody>
                                        <tr> {{--2 класс ряд сетки--}}
                                            <td><img src="{{ url('storage/images/UMNbI6vQDjyf28mr7BMzqpk7P28dZTxIfql4mq8H.jpg') }}" alt=""></td> {{--3 колонка содержимое ячейки--}}
                                            <td><a href="#">Средство для чистки унитаза Domestos Эксперт Сила 1 л</a></td>
                                            <td>110 грн</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{ url('storage/images/LQOnAflqKVTbMBKrELQmUIsEnlqoRgwF5DvSlp20.jpg') }}" alt=""></td>
                                            <td><a href="#">Блок питания RZTK PcCooler HW600-NP</a></td>
                                            <td>1599 грн</td>
                                            <td>1</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Продолжить
                                        покупки
                                    </button>
                                    <button type="button" class="btn btn-primary">Оформить заказ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-search" style="font-size: 20px"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container main_content">@yield ('main_content')</div>
<footer>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4>Информация</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Возврат</a></li>
                        <li><a href="#">Подарочный сертификат</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h4>Время работы</h4>
                    <ul class="list-unstyled">
                        <li>Пн-Сб: 10:00-18:00</li>
                        <li>Вс: 12:00-17:00</li>
                        <li>Без перерыва</li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h4>Контакты</h4>
                    <ul class="list-unstyled">
                        <li><a href="tel:5550000000">555 000-00-00</a></li>
                        <li><a href="tel:5551111111">555 111-11-11</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <h4>Мы в сети</h4>
                    <div class="footer-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
</html>
