@extends('layouts.app')

@section('title', 'Generated QR Codes')

@section('content')
    <h1>Generated QR Codes</h1>
    <div class="row">
        @foreach($hashes as $hash)
            <div class="col-md-3 text-center mb-4">
                {!! QrCode::size(200)->generate(url('/'.$hash->md5hash)) !!}
            </div>
        @endforeach
    </div>
@endsection