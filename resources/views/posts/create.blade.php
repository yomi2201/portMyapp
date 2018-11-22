@extends('layouts.app')
 
@section('content')
<form method="post" action="create" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
      </div>
      <div class="form-group">
        <label for="latInput">緯度</label>
        <input type="text" class="form-control" id="latInput" name="lat">
      </div>
      <div class="form-group">
        <label for="lngInput">経度</label>
        <input type="text" class="form-control" id="lngInput" name="lng">
      </div>
    <input type="file" name="image" value=''>
    <input type="submit">
</form>
@endsection
