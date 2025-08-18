@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Welcome to Admin Dashboard 🚀</h1>
    <p>Halo Admin, ini halaman utama dashboard kamu.</p>

    <div class="card p-3 mt-3">
        <h3>Total Users: {{ $totalUsers }}</h3>
    </div>
</div>
@endsection
