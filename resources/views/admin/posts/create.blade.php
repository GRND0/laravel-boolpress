@extends('layouts.dashboard')

@section('content')

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data"> 
    @method('POST')
    @csrf
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" > 
    </div>
    <div class="form-group">
      <label for="category_id">Categoria</label>
      <select class="form-control" id="category_id" name="category_id"> 
        <option value="">Nessuna</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }} > {{ $category->name }} </option>
            
        @endforeach
      </div>

      <div> 
        <h4>Tags</h4>
        @foreach ($tags as $tag)
        <div class="form-check">
          <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag-{{$tag->id}}">
          <label class="form-check-label" for="tag-{{$tag->id}}"  {{ in_array( $tag->id, old('tags', [])) ? 'checked' : '' }}  >
            {{$tag->name}}
          </label>
        </div>
        @endforeach

      </div>

    <div >
      <div class="form-group">
        <label for="content">Contenuto</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}"> 
    </div>
  </div>

  <div>
    <label for="image">Immagine</label>
    <input type="file" id="image" name="image">
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection