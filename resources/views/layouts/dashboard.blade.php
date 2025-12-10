<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
@php
if(Auth::user()->role == 'Administrador'){
$image = "images/dashboard.jpg";
}
else{
$image = "images/fondo2.jpg";
}
@endphp

<body class="min-h-[100dvh] bg-[url({{ asset($image) }})] bg-center bg-cover bg-fixed w-full flex flex-col gap-4 items-center justify-center p-8 pt-20">
    @include('layouts.navbar')
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('js')
</body>
</html>