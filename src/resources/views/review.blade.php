@extends('layout')

@section('content')

<h1>{{ $task->task_name }}</h1>
<form class="row g-3" action="{{ route('review', ['id'=>$review->review_id]) }}" method="POST">
    @csrf
    <script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>
    <div class="col-md-2">
        評価
        <select class="form-select" name='review_ice' value="{{ $review ->review_ice }}">
            <option value='1'>面白い</option>
            <option value='2'>普通</option>
            <option value='3'>合わなかった</option>
        </select>
    </div>

    <div class="col-md-2">
        ジャンル
        <select class="form-select" name='review_genre' value="{{ $review ->review_genre }}">
            <option value='1'>サスペンス</option>
            <option value='2'>ミステリー</option>
            <option value='3'>アクション</option>
            <option value='4'>コメディ</option>
            <option value='5'>ホラー</option>
            <option value='6'>恋愛</option>
        </select>
    </div>

    <div class="col-md-2">
        オススメできる層
        <select class="form-select" name='review_layer' value="{{ $review ->review_layer }}">
            <option value='1'>全般</option>
            <option value='2'>一人</option>
            <option value='3'>友達</option>
            <option value='4'>家族</option>
            <option value='5'>恋人</option>
        </select>
    </div>

    <textarea id="editor" name="review_impre" rows="8" cols="40" value="{{$review ->review_impre}}">
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