@extends('layouts.layoutPrincipal')

@section('contenido')
<div class="card border border-dark mt-2 mb-3" >
    <div class="card-header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img class="card-img-left" src="{{ asset('assets/img/logo-user.png') }}">
                </div>
                <div class="col-10">
                    <h2 class="h2">{{ auth()->user()->username }}</h2>
                    <div class="row">
                        <div class ="col-4">0 SIGUIENDO</div>
                        <div class ="col-4">0 SEGUIDORES</div>
                        <div class ="col-4">0 POSTS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body text-dark" style="background-color: rgba(128, 128, 128, 0.10)">
 
        {{-- @if($posts -> count()) --}}
        <h1 class="card-title text-center">PUBLICACIONES</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
         @foreach ($files as $post)
         <div class="col">
           <div class="card h-100">
             <img src="{{ asset('uploads').'/'.$post->imagen }}" class="card-img-top" alt="Devstagram"/>
             <div class="card-body">
               <h5 class="card-title">{{ $post->titulo }}</h5>
               <p>
                {{ $post->descripcion }}
               </p>
               <p class="card-text">
                 {{-- <small class="text-info">{{ '@'.$post->user->username }}</small> --}}
                 <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
               </p>
             </div>
             <div class="card-footer">
               {{-- <a href="{{ route('posts.show', ['post' => $post , 'user' => $user]) }}" ><i class="far fa-comment"></i></a> --}}
             </div>
           </div>
         </div>
         @endforeach
       </div>
       {{-- <div> {{ $files->links('pagination::bootstrap-5') }} --}}
        {{-- @else
        <h1 class="text-center">NO HAY PUBLICACIONES</h1>
        @endif   --}}
     </div>
  </div>
@endsection
