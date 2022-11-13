@extends('layouts.app')

@section('title', 'Register')

@section('content')

<section  style="background-color:rgb(224, 227, 229);">
    <form method="POST">
    @csrf
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Register</h3>
                            <div class="row">
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" autocomplete="name" autofocus>
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" name="last_names" id="last_names" placeholder="Last Names" class="form-control" autocomplete="last_name" autofocus>
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" name="numero_documento" id="numero_documento" placeholder="Document" class="form-control" autocomplete="numero_documento" autofocus>
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" name="telefono" id="telefono" placeholder="Phone" class="form-control" autocomplete="telefono" autofocus>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" id="username" placeholder="Username" class="form-control" autocomplete="username" required autofocus>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" name="direccion" id="direccion" placeholder="Direction" class="form-control" autocomplete="direccion" autofocus>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" autocomplete="email" required autofocus>
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control" autocomplete="current-password" required>
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation" class="form-control" autocomplete="current-password" required>
                                </div>
                                <div class="d-grid gap-2 mx-auto">
                                    <button class="btn btn-dark" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection
