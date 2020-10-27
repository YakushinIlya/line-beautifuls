<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ),

    'logo' => '/frontend/media/img/logo.png',
    'phone' => '+7 (900) 083-18-57',

    'error404' => [
        'head' => 'Ошибка 404!',
        'message' => 'Страница не найдена.',
    ],
    'randAsk' => [
        0 => 'Как дела?',
        1 => 'Что нового?',
        2 => 'Какие планы?',
        3 => 'Как настроение?',
        4 => 'Настроение боевое?',
        5 => 'Самое время делать дела!',
        6 => 'Будем что-то менять на сайте?',
        7 => 'Возможно сейчас самое время поработать...',
        8 => 'Как успехи в делах?',
        9 => 'Самое время конвертировать клиентов в деньги!',
        10 => 'Вперед за новыми достижениями!',
    ],

];
