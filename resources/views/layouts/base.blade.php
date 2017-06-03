<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tinos:400i" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-96x96.png') }}" sizes="96x96">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    <title>Cook Book</title>
</head>
<body>

<div class="container">
    <div class="navbar-wrap">
        <div class="rd-navbar-static">
            <div class="header">
                <div class="shell flex flexible">
                    <div class="logo-block rd-navbar-panel">
                        <h1><a href="{{ route('homepage')  }}">CookBook</h1>
                    </div>
                        <div class="flex flexible">
                            <ul class="menu flex flexible">
                                <li><a>РЕЦЕПТЫ</a></li>
                                <li><a>ПОИСК</a></li>
                            </ul>
                            <ul style="width: 151px;">
                                <li><a>Новый рецепт</a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        @yield('content')
    </div>
</div>
</body>
</html>