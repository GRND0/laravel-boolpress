@extends('layouts.dashboard')
@section('content')

    <h1>{{$post->title}}</h1>
    @if ($post->cover)
    <img src="{{asset('storage/' . $post->cover )}}" alt="">
    @endif
    <p>Slug : {{$post->slug}}</p>
    <p>{{$post->content}}</p>

    <p> <strong> Tags: </strong>
        @forelse ($post->tags as $tag)
        {{ $tag->name }} {{$loop->last ? '' : ','}}
            
        @empty
            nessuno
        @endforelse
    
    
    </p>

   <a class="btn btn-primary" href="{{route('admin.posts.edit', ['post' => $post->id])}}" >Modifica</a>


   <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit" onclick="return confirm('Vuoi veramente cancellare questo post?')">Cancella</button>
    </form>

@endsection

