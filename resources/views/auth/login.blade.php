@extends('layouts.auth')

@section('content')
    <form class="form-signin">
        <img class="mb-4" src="{{config('view.logo')}}" alt="" width="100%">
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Введите email администратора" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Введите пароль администратора" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" checked> Запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}}</p>
    </form>
    </body>
    </html>
@endsection
