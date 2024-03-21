<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4f3a02b65f.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
    <title>Orior</title>
</head>
<body class=" leading-7 text-sm">
    <div id="background">
    
        @include("partials._navigation")
        {{-- view output --}}
        {{ $slot }}

    </div>
</body>
</html>