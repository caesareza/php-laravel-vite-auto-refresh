@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div>
        <h1>{{ $post->title }}</h1>
        <div class="kategori">Kategori: {{ $post->category}} </div>
        <div class="foto"><img src="{{ $post->image }}"</div>
        <div class="content">{!! $post->body !!}</div>
    </div>
@endsection