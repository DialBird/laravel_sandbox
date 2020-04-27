@extends('layouts/app')
@section('content')
<div class="container ops-main">
  <div class="row">
    <div class="col-md-6">
      <h2>書籍作成</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-1">
      @include('book/form', ['target' => 'store'])
    </div>
  </div>
</div>
@endsection
