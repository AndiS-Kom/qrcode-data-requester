<!DOCTYPE html>
<html>
<head>
    <title>QR Codes</title>
</head>
<body>
    @foreach($hashes as $hash)
        <div>
            {!! QrCode::size(100)->generate(url('/'.$hash->md5hash)) !!}
        </div>
    @endforeach
</body>
</html>
