<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="grid grid-cols-4 grid-rows-2 gap-4">
            <div class="bg-blue-200">Primera caja</div>
            <div class="bg-blue-300">Segunda caja</div>
            <div class="bg-blue-400 col-span-2 row-span-2">Tercera Caja</div>
            <div class="bg-blue-500">Cuarta Caja</div>
            <div class="bg-blue-600">Quinta Caja</div>
        </div>
    </div>
    
</body>
</html>