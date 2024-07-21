@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <form action="{{ route('admin.generate') }}" method="POST" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="count" class="form-label">Number of QR Codes to Generate:</label>
            <input type="number" id="count" name="count" class="form-control" value="100" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>
    <a href="{{ route('admin.qrcodes') }}" class="btn btn-secondary">View Generated QR Codes</a>
@endsection
