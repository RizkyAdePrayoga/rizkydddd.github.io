@extends('dashboard.layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By. Tio in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
@endsection