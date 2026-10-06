@extends('layouts.app')

@section('content')
    <div class="page-header p-4 mb-4 d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div>
            <h1 class="h3 mb-1">Daftar Pengguna</h1>
            <p class="mb-0 opacity-75">Total: {{ count($users) }} pengguna terdaftar</p>
        </div>
        <a href="{{ route('user.create') }}" class="btn btn-light">
            <i class="bi bi-person-plus me-1"></i> Tambah Pengguna
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <x-user-table :users="$users" />
        </div>
    </div>
@endsection
