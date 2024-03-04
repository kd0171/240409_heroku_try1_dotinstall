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
        <h1>My BBS(show)</h1>

        <div class="back-link">
            &laquo; <a href="/">Back</a>
        </div>

        <h1>{{ $post }}</h1>
    </div>
</body>
</html>
