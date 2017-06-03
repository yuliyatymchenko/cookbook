@extends('layouts.base')

@section('content')
    <div class="range">
        <?php $rows = count($receipts)/2 ?>

        @for($i = 0; $i < $rows; $i++)
            @for($j = 0; $j < 2; $j++)
                <div class="cell">
                    @if(isset($receipts[$i*2 + $j]))
                        <?php $receipt = $receipts[$i*2 + $j] ?>
                        <img src="images/receipts/{{$receipt->idReceipt}}.jpg" />
                        <div class="shadow"></div>
                        <a href="{{route('showFromCategory', ['id' => $receipt->category->idCategory])}}">
                            <span class="title">{{$receipt->category->name}}</span>
                        </a>
                        <div class="title-section">
                            <a class="receipt-title" href="{{route('showReceipt', ['id' => $receipt->idReceipt])}}">
                                {{$receipt->title}}
                            </a><br />
                            <span><i class="fa fa-clock-o fa-2" aria-hidden="true"></i> 2 дня назад</span>
                        </div>
                    @endif
                </div>
            @endfor
        @endfor
    </div>
@endsection
