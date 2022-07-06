@extends('layouts.dashboard')
@section('content')

    <h1>{{$post->title}}</h1>
    <p>Slug : {{$post->slug}}</p>
    <p>{{$post->content}}</p>

   <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post' => $post->id])}}" >Modifica</a>


   <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit" onclick="return confirm('Vuoi veramente cancellare questo post?')">Cancella</button>
    </form>

@endsection

