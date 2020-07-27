@extends('welcome')
@section('content')
    <div class="wrapper-main">
        <h2 class="title text-center kết quả tìm kiếm"></h2>
        @foreach($search_product as $key =>$product)


        @endforeach
    </div>
@endsection
