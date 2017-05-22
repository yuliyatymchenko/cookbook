@extends('layouts.base')

@section('content')
    <div class="categories">
        <?php $rows = count($categories)/4 ?>

        @for($i = 0; $i < $rows; $i++)
            <div class="row">
            @for($j = 0; $j < 4; $j++)
                <div class="cell">
                @if(isset($categories[$i*4 + $j]))
                    <?php $category = $categories[$i*4 + $j] ?>
                    <a href="/category/show/{{$category->idCategory}}">
                    <img src="images/{{$category->idCategory + 1}}.jpg" />
                    <div class="title"><span>{{$category->name}}</span></div>
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
