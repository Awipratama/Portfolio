<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awipratama</title>

    @vite('resources/css/app.css')
</head>
<body>
    <x-portonavbar />
    <div class="container-main flex pt-32 pb-16 gap-8">
        <x-mainprofile />
        {{ $slot }}
    </div>

    @vite('resources/js/app.js')
</body>
</html>