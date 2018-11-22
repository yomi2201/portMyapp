@extends('layouts.app')
 
@section('content')
    <h1>一覧</h1>
    <p><a href="create" class="btn btn-primary">新規追加</a></p>

    @foreach ($posts as $post)
    <div class="card mb-2">
      <div class="card-body">
        <h4 class="card-title">{{ $post->title }}</h4>
        <img src="{{ $post->path }}" height=150px width=300px>
        <p class="card-body">{{ $post->body }}</p>
        <a href="/edit/{{ $post->id }}" class="card-link">修正</a>
        <a href="/delete/{{ $post->id }}" class="card-link">削除</a>
      </div>
    </div>
    @endforeach
@endsection
