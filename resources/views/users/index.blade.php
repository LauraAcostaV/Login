@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="content py-5 h-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-category">Usuarios registrados</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead class="text-muted">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Nombre de usuario</th>
                                    <th>Documento</th>
                                    <th>Télefono</th>
                                    <th>Dirección</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Created_at</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->last_names }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->numero_documento }}</td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>{{ $user->direccion }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->state }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <a href="{{ route('users.show', $user->id) }}" class="btn-info">
                                                    <button class="btn btn-primary btn-sm" type="button">Ver</button>
                                                </a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn-info">
                                                    <button class="btn btn-success btn-sm" type="button">Editar</button>
                                                </a>
                                                <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Está seguro de eliminar este registro?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
