@extends('layouts.layoutPrincipal')
@section('contenido')
    <div class="row mt-5 mb-5">
        <div class="col-6">
            <img src="{{ asset('assets/img/registrar.jpg') }}" class="img-fluid rounded" />
        </div>
        <div class="col-6">
            <div class="card border border-dark mb-3">
                <div class="card-header">REGISTRATE EN DEVSTAGRAM</div>
                <div class="card-body text-dark">
                    <form action="/registro" method="POST">
                        @csrf
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control"
                           />
                            <label class="form-label" for="form6Example3">Nombre</label>
                        </div>
                        @error('name')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                            
                    
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control" />
                            <label class="form-label" for="form6Example4">Usuario</label>
                        </div>
                        @error('username')
                        <p style="color: red">{{$message}}</p>
                        @enderror

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control" />
                            <label class="form-label" for="form6Example5">Email</label>
                        </div>
                        @error('email')
                        <p style="color: red">{{$message}}</p>
                        @enderror

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" />
                            <label class="form-label" for="form6Example6">Password</label>
                        </div>
                        @error('password')
                        <p style="color: red">{{$message}}</p>
                        @enderror

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" />
                            <label class="form-label" for="form6Example6">confirma Password</label>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Crear Cuenta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
