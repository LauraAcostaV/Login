@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<section style="background-color:rgb(224, 227, 229);">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Edit User</h3>
                            <div class="row">
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" value="{{ $user->name }}" placeholder="Name" id="name" name="name" class="form-control">
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" value="{{ $user->last_names }}" placeholder="Last Names" id="last_names" name="last_names" class="form-control">
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" value="{{ $user->numero_documento }}" placeholder="Document" id="numero_documento" name="numero_documento" class="form-control">
                                </div>
                                <div class="form-outline mb-4 col-6">
                                    <input type="text" value="{{ $user->telefono }}" placeholder="Phone" id="telefono" name="telefono" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" value="{{ $user->username }}" placeholder="Username" id="username" name="username" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" value="{{ $user->direccion }}" placeholder="Direction" id="direccion" name="direccion" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="email" value="{{ $user->email }}" placeholder="Email" id="email" name="email" class="form-control">
                                </div>
                                <div class="form-outline mb-4">
                                    <select class="form-select">
                                        <option selected>Activo</option>
                                        <option value="1">Activo</option>
                                        <option value="1">Inactivo</option>
                                    </select>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" placeholder="Ingrese la contraseña solo en caso de modificarla" id="password" name="password" class="form-control">
                                </div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <button class="btn btn-success" type="submit">Actualizar</button>
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
