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
    <div class="card-body text-dark">
      <h5 class="card-title">Dark card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>
@endsection
