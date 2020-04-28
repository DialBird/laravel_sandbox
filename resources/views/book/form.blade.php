@if($target == 'store')
  <form action="/book" method="post">
@elseif($target == 'update')
  <form action="/book/{{ $book->id }}" method="post">
    @method('PUT')
@endif
  @csrf
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
  <a href="{{ route('book.index') }}">戻る</a>
</form>
