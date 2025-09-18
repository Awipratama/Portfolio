<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awipratama</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
    <x-portonavbar />
    <div class="container-main flex pt-32 pb-16 gap-8">
        <x-mainprofile />
        {{ $slot }}
    </div>

    @vite('resources/js/app.js')

    <script src="https://unpkg.com/alpinejs" defer></script>
</body>
</html>