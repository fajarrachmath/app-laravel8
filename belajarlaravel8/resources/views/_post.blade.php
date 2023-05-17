<!-- layout  -->
@extends('layouts.main')

<!-- seksi card header-->
@section('card-header')
<div class="card-header bg-gradient-primary text-light">
    <div class="text-center h2">COBA POST</div>
</div>
@endsection

<!-- seksi card-body-->
@section('card-body')
<div class="card-body">
    <a
        class="twitter-timeline"
        href="https://twitter.com/ShouldHaveCat?ref_src=twsrc%5Etfw"
        >Tweets by ShouldHaveCat</a
    >
    <script
        async
        src="https://platform.twitter.com/widgets.js"
        charset="utf-8"
    ></script>

    <div class="row justify-content-center text-lg">
        <h2>{{ $data["nama"] }}</h2>
        <h3>{{ $data["email"] }}</h3>
    </div>
    <hr />
    <a href="/_array">Back to post</a>
</div>
@endsection
