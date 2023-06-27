<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    <div class="grid grid-cols-5">
        <div id="side" class="cont shadow-lg shadow-slate-500">
            <ul class="list-disc">
                <li class="pb-5"><a href="{{route('inicio')}}">Datos generales</a></li>
                <li class="pb-5"><a href="{{route('introdiccion')}}">Introducción</a></li>
                <li class="pb-5">Desarrollo</li>
                <li class="pb-5">Desenlace</li>
                <li class="pb-5"><a href="previa.html">Vista previa</a></li>
            </ul>
        </div>
        <div class=" col-span-4 cont grid grid-cols-2 gap-5" id="main">
            <div class="border border-slate-300 rounded-lg form ">
                <h3 class="text-center">Datos de la historia</h3>
                <label for="">Genero:</label>
                <input type="text" class="texto">
                <label for="">Titulo</label>
                <input type="text" class="texto">
                <div class="sugerencia"><input type="checkbox" name="" id="" class="check"> <span>Sugerencia:</span></div>
                <textarea name="" id="" cols="30" rows="5" class="texto"></textarea>
            </div>
            <div class="border border-slate-300 rounded-lg form">
                <h3 class="text-center">Requerimientos:</h3>
                <label for="">Palabras claves:</label>
                <input type="text" class="texto">
                <div class="sugerencia"><input type="checkbox" name="" id="" class="check"> <span>Sugerencia:</span></div>
                <textarea name="" id="" cols="30" rows="5" class="texto"></textarea>
                <label>Imagen de referencia:</label>
                <input type="file" class="texto">
                <label>Porcentaje de ocurrencia:</label>
                <input type="text" class="texto">
            </div>
            <button id="siguiente" class="col-start-2">Siguiente<span class="material-symbols-outlined">play_arrow</span></button>
        </div>
    </div>
</body>
</html>