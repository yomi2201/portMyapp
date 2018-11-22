@extends('layouts.app')
 
@section('content')
<h1>ブログ修正</h1>

<form method="post" action="/edit">
  {{ csrf_field() }}
  <input type="hidden" class="form-control" name="id" value="{{ $post->id }}">
  <div class="form-group">
    <label for="titleInput">タイトル</label>
    <input type="text" class="form-control" id="titleInput" name="title" value="{{ $post->title }}">
  </div>
  <div class="form-group">
    <label for="bodyInput">内容</label>
    <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $post->body }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">修正</button>
</form>
@endsection
