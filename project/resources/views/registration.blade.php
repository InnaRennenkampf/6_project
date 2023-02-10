@extends('layout')

@section('title')Регистрация@endsection

@section('main_content')

    <body class="text-center">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main class="form-signin w-100 m-auto" style="max-width: 330px; padding: 15px;">
        <form method="post" action="/registration">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="floatingInput">Введите email</label>
                @error('email')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="floatingPassword">Введите пароль</label>
                @error('password')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Зарегистрироваться</button>
        </form>
    </main>
    </body>

@endsection

