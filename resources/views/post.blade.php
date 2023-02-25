@extends('master')

@section('header-intro')
<h2>{{ $post->title}}</h2>    
@endsection

@section('main')

<div id="content-post">
    <p>
        {{ $post->content }}
     </p>
</div>
     
@endsection