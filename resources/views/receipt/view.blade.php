@extends('layouts.base')

@section('content')
    <div class="main-content">
        <div class="column-center">
            <h1>{{ $receipt->title }}</h1>
            <div class="image-container">
                <?php $imagePath = "images/receipts/{$receipt->idReceipt}.jpg" ?>
                <img src="{{asset($imagePath)}}" />
            </div>

            <div class="steps">
                @foreach ($receipt->steps as $index => $step)
                    <p class="step"><span>Шаг {{$index + 1}}</span>{{$step->text}}</p>
                @endforeach
            </div>
        </div>
        <div class="column-right">
            <div class="components">
                <h2 class="title">Ингредиенты</h2>
                <ul>
                @foreach ($receipt->components as $component)
                        <li><span>{{ $component->value }}{{ $component->measure->shortName }}</span> {{$component->componentType->name}}</li>
                @endforeach
                </ul>
            </div>

            <div>
                <a class="print-button" href="#"><i class="fa fa-print" aria-hidden="true"></i>Распечатать рецепт</a>
            </div>

        </div>
    </div>
@endsection