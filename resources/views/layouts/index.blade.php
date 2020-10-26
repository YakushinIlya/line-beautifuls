<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <!-- title -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Yakushin Ilya">
    <!-- description -->
    <meta name="description" content="@yield('description')">
    <!-- keywords -->
    <meta name="keywords" content="@yield('keywords')">
    <!-- favicon -->
    <link rel="shortcut icon" href="/front/images/favicon.png">
    <link rel="apple-touch-icon" href="/front/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/front/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/front/images/apple-touch-icon-114x114.png">
    <!-- bootsnav -->
    <link rel="stylesheet" href="/frontend/media/css/bootstrap.min.css">
    <!-- style -->
    <link rel="stylesheet" href="/frontend/media/css/style.css" />
</head>
<body>

<section class="header">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 header__logo">
                    <img src="{{config('view.logo')}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <nav class="pt-5">
                        <div class="container d-flex flex-column flex-md-row justify-content-between">
                            <a class="py-2 d-none d-md-inline-block" href="#">О нас</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Прайс</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Мастера</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Работы</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Контакты</a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 header__phone">
                    <span>{{config('view.phone')}}</span>
                    <div class="mt-2"></div>
                    <div class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Заказать звонок</div>
                </div>
            </div>
        </div>
    </header>
</section>

<section class="page">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="h3">@yield('head')</h1>
                    <br>
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</section>

<section class="footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer__logo">
                    <img src="{{config('view.logo')}}" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <nav class="pt-5">
                        <div class="container d-flex flex-column flex-md-row justify-content-between">
                            <a class="py-2 d-none d-md-inline-block" href="#">О нас</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Прайс</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Мастера</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Работы</a>
                            <a class="py-2 d-none d-md-inline-block" href="#">Контакты</a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 footer__phone">
                    <span>{{config('view.phone')}}</span>
                    <div class="mt-2"></div>
                    <div class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Заказать звонок</div>
                </div>
                <div class="col-12 mt-3">
                    <h5>Мы в социальных сетях</h5>
                    <div class="social">
                        <img src="/frontend/media/images/icon-social.png">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>





<script type="text/javascript" src="/frontend/media/js/jquery.js"></script>
<script type="text/javascript" src="/frontend/media/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#carouselExampleControls').carousel({
        interval: 5000,
        ride: carousel,
        wrap: false,
    })
</script>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Заказ звонка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>