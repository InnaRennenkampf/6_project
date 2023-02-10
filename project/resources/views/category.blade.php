@extends('layout')

@section('title')Категории@endsection

@section('main_content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form method="post" action="/category/check">
        @csrf
        <b>Форма добавления категории</b><br>
        <input type="text" name="category" id="category" placeholder="Введите категорию">
        <button type="submit" class="button-success">Отправить</button>
    </form>

    <h1>Категории</h1>
 @foreach($categories as $el)
     <b><a href="/itemsByCategoryId/{{ $el->id }}"> {{ $el->name }}</a></b><br>
 @endforeach
@endsection
