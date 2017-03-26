<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
        <link href="{{ asset('/css/base.css') }}" rel="stylesheet">
        <title>Cook Book</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo-block">
                    <h1>Cook Book</h1>
                    <h3>рецепты по шагам</h3>
                    <!--<span class="rounded-block left"></span>
                    <span class="rounded-block right"></span>-->
                </div>
                <div class="user-block">
                    <span class="toque"></span>
                    Тымченко Юля
                    <p>(10 рецептов)</p>
                </div>
                <div class="logout" title="Выйти">X</div>
            </div>
            <div class="menu">
                <ul class="main">
                    <li class="active">Рецепты</li>
                    <li>Подписки</li>
                    <li>Новости</li>
                </ul>
                <ul class="submenu">
                    <li class="active">Десерты</li>
                    <li>Выпечка</li>
                    <li>Супы</li>
                    <li>Горячее</li>
                </ul>
            </div>
            <div class="receipts">
                <div><img src="{{asset('images/receipts/1.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/2.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/3.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/4.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/1.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/2.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/3.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/4.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/1.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/2.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/3.jpg')}}" /></div>
                <div><img src="{{asset('images/receipts/4.jpg')}}" /></div>
            </div>
        </div>
    </body>
</html>
