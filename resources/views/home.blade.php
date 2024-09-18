<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css') {{-- Added Tailwind CSS --}}

    <title>Home - Laravel</title>

    <style>
    </style>

</head>

<body>
    <h1>Bienvenido a la pagina principal</h1>

    <div class="container">
        <div
            class="grid grid-flow-col
            grid-cols-1 md:grid-cols-2 lg:grid-cols-3
            grid-rows-9 md:grid-rows-5 lg:grid-rows-3
        gap-x-4 gap-y-2">
            <div class="bg-blue-100">A</div>
            <div class="bg-blue-200">B</div>
            <div class="bg-blue-300">C</div>
            <div class="bg-blue-400">D</div>
            <div class="bg-blue-500">E</div>
            <div class="bg-blue-600">F</div>
            <div class="bg-blue-700">G</div>
            <div class="bg-blue-800">H</div>
            <div class="bg-blue-900">I</div>
        </div>
    </div>
</body>

</html>
