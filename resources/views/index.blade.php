<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/88c27f491f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<style>
    body {
        font-family: 'Cutive Mono', monospace;
        background-color: black;
        color: white;
        
    }
    </style>
<body>
    @yield('content')
</body>
</html>