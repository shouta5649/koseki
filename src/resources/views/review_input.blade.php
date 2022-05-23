@extends('layout')

@section('content')
<h1>レビュー登録</h1>
<form class="row g-3" method="POST" action="{{ route('review_input') }}">
    @csrf
    <textarea id="editor" name="review_" rows="8" cols="40">
    </textarea>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("editor") });
    </script>

    <p class="card-text"><input class="btn btn-primary" type="submit" value="登録">


</form>
@endsection