@extends('layouts.main')

<!-- seksi card header-->
@section('card-header')
<div class="card-header bg-gradient-primary text-light">
    <div class="text-center h2">COBA ARRAY</div>
</div>
@endsection

<!-- seksi card-body-->
@section('card-body')

<div class="card-body">
    <div class="row justify-content-center text-lg">
        @foreach ($data as $post)
        <a href="/_post/{{ $post['slug'] }}">{{ $post["nama"] }}</a>
        <h3>{{ $post["nama"] }}</h3>
        <h5>{{ $post["email"] }}</h5>
        @endforeach
    </div>
</div>
@endsection
