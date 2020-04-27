@if($target == 'store')
  <form action="/book" method="post">
@elseif($target == 'update')
  <form action="/book/{{ $book->id }}" method="post">
    <input type="hidden" name="_method" value="PUT">
@endif
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="name">書籍名</label>
    <input type="text" class="form-control" name="title" value="{{ $book->title }}">
  </div>
  <div class="form-group">
    <label for="price">価格</label>
    <input type="text" class="form-control" name="price" value="{{ $book->price }}">
  </div>
  <div class="form-group">
    <label for="author">著者</label>
    <input type="text" class="form-control" name="author" value="{{ $book->author }}">
  </div>
  <button type="submit" class="btn btn-default">登録</button>
  <a href="/book">戻る</a>
</form>
