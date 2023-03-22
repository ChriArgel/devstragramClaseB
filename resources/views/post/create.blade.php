@extends('layouts.layoutPrincipal')

@push('styles')
 <link rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">
@endpush

@section('contenido')
<div class="row">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        <!-- Example of a form that Dropzone can take over -->
        <form action="{{ route ('imagenes.store') }}" id="dropzone" method="POST" enctype="multipart/form-data"
         class="dropzone w-100 h-100 rounded border border-1 d-flex align-items-center justify-content-center">
            @csrf

        </form>
    </div>

    <div class="col-7 p-5 text-center m-2 rounded-2 border">
        <h2 class="mb-3">Crea tu nuevo post</h2>
        <form action="{{ route('posts.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-outline m-3">
                <input type="text" id="typeText" class="form-control" name="titulo" />
                <label class="form-label" for="typeText">Titulo</label>
            </div>
            @error('titulo')
                <p style="color: red">{{$message}}</p>
            @enderror
            <div class="form-outline m-3">
                <textarea class="form-control" name="descripcion" id="textAreaExample" rows="4"></textarea>
                <label class="form-label" for="textAreaExample">Mensaje</label>
            </div>
            @error('descripcion')
                <p style="color: red">{{$message}}</p>
            @enderror
            <div>
                <input name="imagen" id="imagen" type="hidden" value= {{ old('imagen') }} />
            </div>
            @error('imagen')
                <p style="color:red">{{ $message }}</p>
            @enderror
 
            <button type="submit" class="btn btn-primary btn-block mb-4">Crear Publicacion</button>
        </form>
    </div>
</div>
@endsection
