@extends('layouts.app')

@section('title', 'Input Data')

@section('content')
    <h1>You scan a Valid QR Code</h1>
    <h2>Please fill in the following form to submit your data</h2>
    <form action="{{ route('enduser.store', $hash) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City:</label>
            <input type="text" id="city" name="city" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code:</label>
            <input type="text" id="postal_code" name="postal_code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country:</label>
            <input type="text" id="country" name="country" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
