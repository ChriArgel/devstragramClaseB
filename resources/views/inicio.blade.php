@extends('layouts.layoutPrincipal')
@section('contenido')
    <div class="row mt-5 mb-5">
        <div class="col-6">
            <img src="{{ asset('assets/img/login.jpg') }}" class="img-fluid rounded" />
        </div>

        <div class="col-6">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if (session('mensaje'))
                    <p style="color: red">{{ session('mensaje') }}</p>
                @endif

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form2Example1" name="email" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>
                @error('email')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form2Example2" name="password" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>
                @error('password')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <!-- Default checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">Recuerdame</label>
                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/registro">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
