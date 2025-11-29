<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>@yield('title')</title>
<style>
        /* Simple navbar */
        .navbar {
            background: #333;
            padding: 12px;
        }
        .navbar a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a:hover {
            color: #00d2ff;
        }

        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>

    {{-- Shared Navigation --}}
@include('layouts.nav')
<div class="content">
    @yield('content')
</div>
</body>
</html>
