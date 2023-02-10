@extends('layout')

@section('title')Вход@endsection

@section('main_content')

<body class="text-center">

<main class="form-signin w-100 m-auto" style="max-width: 330px; padding: 15px;">
    <form method="post" action="/login">
        @csrf
        <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Вход</h1>

        <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
            <label for="floatingInput">Введите email</label>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="floatingPassword">Введите пароль</label>
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить меня
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Войти</button>
    </form>

    <a class="w-100 btn btn-lg btn-primary mt-4" href="/registration">Регистрация</a>
</main>
</body>

@endsection
