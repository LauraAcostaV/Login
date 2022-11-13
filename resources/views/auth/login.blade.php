@extends('layouts.app')

@section('title', 'Login')

@section('content')

<section class="vh-100" style="background-color:rgb(224, 227, 229);">
    <form method="POST">
    @csrf
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>
                            <div class="form-outline mb-4">
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control" autocomplete="username" required autofocus>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control" autocomplete="current-password" required>
                            </div>

                            @error('message')
                                <p>{{ $message }}</p>
                            @enderror
                            <div class="d-grid gap-2 mx-auto">
                                <button class="btn btn-dark" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
