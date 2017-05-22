<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon-96x96.png') }}" sizes="96x96">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    <title>Cook Book</title>
</head>
<body>

<div class="container">
    <div class="header">
        <div class="logo-block">
            <h1>Cook Book</h1>
            <h3>рецепты по шагам</h3>
        </div>

        <div class="flex">
            <div class="menu"><ul>
                    <li>РЕЦЕПТЫ</li>
                    <li>ПОИСК</li>
                </ul></div>
            <div class="profile"><img src="images/profile.jpg" /></div>
            <div class="add-new">Новый рецепт</div>
        </div>
    </div>

    <div class="page-content">
        @yield('content')
    </div>
</div>
</body>
</html>
