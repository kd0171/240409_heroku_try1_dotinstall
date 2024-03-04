<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
