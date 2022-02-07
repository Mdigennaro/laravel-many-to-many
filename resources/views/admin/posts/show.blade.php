@extends('layouts.admin')

@section('content')
  <div class="pt-5 container">

    <div class="mdg-post text-center pb-5">

      <h1>{{$post->title}}</h1>

      @forelse ($post->tags as $tag)
      <span class="badge bg-info text-dark mb-5">{{$tag->name}}</span>
      @empty
      <div class="mb-5"></div>
      @endforelse

      @if ($post->category)
      <div class="mb-5">
        <h3>Categoria usata:</h3>
        <span><strong>{{$post->category->name}}</strong></span>
      </div>
      @endif
  
      <p>{{$post->content}}</p>

      <div class="btn-action pt-5">
  
        <a href="{{route('admin.posts.index')}}" class="btn btn-info mr-2">Torna alla lista</a>
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-warning">Modifica</a>
        
      </div>
    </div>  

  </div>
@endsection

@section('title')
 post
@endsection