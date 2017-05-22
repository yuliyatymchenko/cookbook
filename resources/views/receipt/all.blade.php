@extends('layouts.base')


@section('content')
    <div class="receipts">
        <?php $rows = count($receipts)/4 ?>

        @for($i = 0; $i < $rows; $i++)
            <div class="row">
                @for($j = 0; $j < 4; $j++)
                    <div class="cell">
                        @if(isset($receipts[$i*4 + $j]))
                            <?php $receipt = $receipts[$i*4 + $j] ?>
                            <?php $imagePath = "images/receipts/{$receipt->idReceipt}.jpg" ?>
                            <a href="/receipt/{{$receipt->idReceipt}}">
                                <img src="{{asset($imagePath)}}" />
                                <div class="title"><span>{{$receipt->title}}</span></div>
                            </a>
                        @endif
                    </div>
                    @if($j !== 3)
                        <div class="separator"></div>
                    @endif
                @endfor
            </div>
            <div class="separator"></div>
        @endfor
    </div>
@endsection
