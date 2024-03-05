<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <h1>{{ $title }}</h1>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
