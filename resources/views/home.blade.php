@extends('layouts.base')

@section('content')
    <div class="receipts">
        @foreach($receipts as $receipt)
            <?php $imagePath = "images/receipts/{$receipt->idReceipt}.jpg" ?>
            <div><a href="/receipt/{{$receipt->idReceipt}}"><img src="{{asset($imagePath)}}" /></a></div>
        @endforeach
    </div>
@endsection
