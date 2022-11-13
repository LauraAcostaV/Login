@extends('layouts.app')

@section('title', 'Show')

@section('content')

<div class="container p-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }} {{ $user->last_names }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $user->username }}</li>
            <li class="list-group-item">{{ $user->numero_documento }}</li>
            <li class="list-group-item">{{ $user->telefono }}</li>
            <li class="list-group-item">{{ $user->direccion }}</li>
            <li class="list-group-item">{{ $user->email }}</li>
            <li class="list-group-item">{{ $user->created_at }}</li>
        </ul>
        <div class="card-body">
            <a href="{{ route('users.index') }}" class="card-link">Volver</a>
        </div>
    </div>
</div>

@endsection
