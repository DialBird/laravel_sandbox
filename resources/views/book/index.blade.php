@extends('layouts/app')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">書籍一覧</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
      <table class="table text-center">
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">書籍名</th>
          <th class="text-center">価格</th>
          <th class="text-center">著者</th>
          <th class="text-center">編集</th>
          <th class="text-center">削除</th>
        </tr>
        @foreach($books as $book)
          <tr>
            <td>
              <a href="{{ route('book.show', ['id' => $book->id]) }}">{{ $book->id }}</a>
            </td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->author }}</td>
            <td>
              <a href="{{ route('book.edit', ['id' => $book->id])}}">編集</a>
            </td>
            <td>
              <form action="/book/{{ $book->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
      <div><a href="/book/create" class="btn btn-default">新規作成</a></div>
    </div>
  </div>
@endsection
