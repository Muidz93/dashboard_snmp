<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    @foreach ($ird as $rd)
        Serial Number : {{ $rd->sn }} <br>
        Merk : {{ $rd->merk }} <br>
        Type : {{ $rd->type }} <br>
        Owner : {{ $rd->owner }} <br>
        Ip Control : {{ $rd->control }} <br>
        <hr>
    @endforeach
</body>
</html>