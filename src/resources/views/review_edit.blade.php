@extends('layout')

@section('content')
<h1>レビュー編集</h1>
<h1>{{ $task->task_name }}</h1>
<form class="row g-3" action="{{ route('review_edit', ['id'=>$review->review_id]) }}" method="POST">
    @csrf

    <div class="col-md-2">
        評価
        @if( $review ->review_ice == 1)
        <select class="form-select" name='review_ice'>
            <option value='1' selected>面白い</option>
            <option value='2'>普通</option>
            <option value='3'>合わなかった</option>
        </select>
        @elseif ( $review ->review_ice == 2)
        <select class="form-select" name='review_ice'>
            <option value='1'>面白い</option>
            <option value='2' selected>普通</option>
            <option value='3'>合わなかった</option>
        </select>
        @else
        <select class="form-select" name='review_ice'>
            <option value='1'>面白い</option>
            <option value='2'>普通</option>
            <option value='3' selected>合わなかった</option>
        </select>
        @endif
    </div>

    <div class="col-md-2">
        ジャンル
        @if( $review ->review_genre == 1)
        <select class="form-select" name='review_genre'>
            <option value='1' selected>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
        @elseif( $review ->review_genre == 2)
        <select class="form-select" name='review_genre'>
            <option value='1'>サスペンス</option>
            <option value='2' selected>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
        @elseif( $review ->review_genre == 3)
        <select class="form-select" name='review_genre'>
            <option value='1'>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3' selected>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
        @elseif( $review ->review_genre == 4)
        <select class="form-select" name='review_genre'>
            <option value='1'>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4' selected>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
        @elseif( $review ->review_genre == 5)
        <select class="form-select" name='review_genre'>
            <option value='1'>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5' selected>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
        @elseif( $review ->review_genre == 6)
        <select class="form-select" name='review_genre'>
            <option value='1'>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6' selected>恋愛</option>
        </select>
        @endif
    </div>

    <div class="col-md-2">
        オススメできる層
        @if( $review ->review_layer == 1)
        <select class="form-select" name='review_layer'>
            <option value='1' selected>全般</option>
            <option value='2'>一人</option>
            <option value='3'>友達</option>
            <option value='4'>家族</option>
            <option value='5'>恋人</option>
        </select>
        @elseif( $review ->review_layer == 2)
        <select class="form-select" name='review_layer'>
            <option value='1'>全般</option>
            <option value='2' selected>一人</option>
            <option value='3'>友達</option>
            <option value='4'>家族</option>
            <option value='5'>恋人</option>
        </select>
        @elseif( $review ->review_layer == 3)
        <select class="form-select" name='review_layer'>
            <option value='1'>全般</option>
            <option value='2'>一人</option>
            <option value='3' selected>友達</option>
            <option value='4'>家族</option>
            <option value='5'>恋人</option>
        </select>
        @elseif( $review ->review_layer == 4)
        <select class="form-select" name='review_layer'>
            <option value='1'>全般</option>
            <option value='2'>一人</option>
            <option value='3'>友達</option>
            <option value='4' selected>家族</option>
            <option value='5'>恋人</option>
        </select>
        @elseif( $review ->review_layer == 5)
        <select class="form-select" name='review_layer'>
            <option value='1'>全般</option>
            <option value='2'>一人</option>
            <option value='3'>友達</option>
            <option value='4'>家族</option>
            <option value='5' selected>恋人</option>
        </select>
        @endif
    </div>

    <textarea id="editor" name="review_impre" rows="8" cols="40">
    </textarea>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("editor") });
    </script>

    <p class="card-text"><input class="btn btn-primary" type="submit" value="更新">
    <p class="card-text"><a class="btn btn-primary" href="http://localhost/index">トップページ</a></p>
</form>
@endsection