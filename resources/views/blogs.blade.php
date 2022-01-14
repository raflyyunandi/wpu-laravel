@extends('layouts.main')

@section('container')

<h2>Judul</h2>
<h5>Rangga Agastya</h5>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, quo.</p>

@foreach ($blogs as $blog)

<article class="mb-5">
    <h2>
        <a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a>
    </h2>
    {{-- <h5>By: {{$blog->author}}</h5> --}}
    <p>{{$blog->excerpt}}</p>
</article>
@endforeach

@endsection