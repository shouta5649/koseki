@extends('layout')

@section('content')

<h1>{{ $task->task_name }}</h1>
<form class="row g-3">
    @csrf
    
    <div class="col-md-2">
        評価
        @if( $review ->review_ice == 1)
        <select class="form-select" name='review_ice' >
            <option value='1' >面白い</option>
        </select>
        @elseif ( $review ->review_ice  == 2)
        <select class="form-select" name='review_ice' >
            <option value='2'>普通</option>
        </select>
        @else
        <select class="form-select" name='review_ice' >
            <option value='3'>合わなかった</option>
        </select>
        @endif
    </div>

    <div class="col-md-2">
        ジャンル
        @if( $review ->review_genre == 1)
        <select class="form-select" name='review_genre' >
            <option value='1'>サスペンス</option>
        </select>
        @elseif( $review ->review_genre == 2)
        <select class="form-select" name='review_genre' >
            <option value='2'>ミステリー</option>
        </select>
        @elseif( $review ->review_genre == 3)
        <select class="form-select" name='review_genre' >
            <option value='3'>アクション</option>
        </select>
        @elseif( $review ->review_genre == 4)
        <select class="form-select" name='review_genre' >
            <option value='4'>コメディ</option>
        </select>
        @elseif( $review ->review_genre == 5)
        <select class="form-select" name='review_genre' >
            <option value='5'>ホラー</option>
        </select>
        @elseif( $review ->review_genre == 6)
        <select class="form-select" name='review_genre' >
            <option value='6'>恋愛</option>
        </select>
        @endif

    </div>

    <div class="col-md-2">
        オススメできる層
        @if( $review ->review_layer == 1)
        <select class="form-select" name='review_layer' >
            <option value='1'>全般</option>
        </select>
        @elseif( $review ->review_layer == 2)
        <select class="form-select" name='review_layer' >
            <option value='2'>一人</option>
        </select>
        @elseif( $review ->review_layer == 3)
        <select class="form-select" name='review_layer' >
            <option value='3'>友達</option>
        </select>
        @elseif( $review ->review_layer == 4)
        <select class="form-select" name='review_layer' >
            <option value='4'>家族</option>
        </select>
        @elseif( $review ->review_layer == 5)
        <select class="form-select" name='review_layer' >
            <option value='5'>恋人</option>
        </select>
        @endif
    </div>
    <textarea readonly name="review_impre" rows="8" cols="40" >{{$review->review_impre}}
    </textarea>



    

    <p class="card-text"><a class="btn btn-primary" href="{{ route('review_edit/{id}',[$review->review_id]) }}">編集</a></p>
    <p class="card-text"><a class="btn btn-primary" href="http://localhost/index">トップページ</a></p>
</form>
@endsection