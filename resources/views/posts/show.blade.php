@extends('layouts.app')
 
@section('content')
<h1>ブログ削除</h1>

<form method="post" action="destroy">
  {{ csrf_field() }}
  <input type="hidden" class="form-control" name="id" value="{{ $post->id }}">
  <div class="form-group">
    <label for="titleInput">タイトル</label>
    <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{ $post->title }}">
  </div>
  <div class="form-group">
    <label for="bodyInput">内容</label>
    <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{ $post->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">削除</button>
</form>
@endsection
