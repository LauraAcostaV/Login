@extends('layouts.app')

@section('title', 'Admin')

@section('content')

<div class="p-5">
    <a href="{{ route('users.index') }}">Lista de usuarios</a>
</div>

@endsection
