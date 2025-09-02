<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Minecraft Manager</title>
</head>

<body class="font-roboto bg-slate-50">

    
    <main class="min-h-screen">
        <x-navbar></x-navbar>
        {{ $slot }}
    </main>
    
    <x-footer></x-footer>
</body>

</html>
