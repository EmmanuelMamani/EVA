<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/introduccion.css')}}">
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
        <div id="main" class="col-span-4 cont">
            <h3 class="text-center text-2xl col-span-2">Titulo de la historia</h3>
            <div class=" grid grid-cols-2 gap-5 mt-5" >
                <div class="border border-slate-300 rounded-lg form1">
                    <h1>Escriba una breve introducción de la historia</h1>
                    <div id="opt" class=" border border-slate-300 w-1/6 rounded-lg">
                        <span class="material-symbols-outlined pl-5">notes</span>
                    </div>
                </div>
                <div>
                    <div class="border border-slate-300 rounded-lg form">
                        <h1>Imagen de referencia:</h1>
                        <img src="https://cdn.pixabay.com/photo/2023/03/12/05/37/rabbit-7845871_1280.jpg" alt="" id="img">
                    </div>
                </div>
            </div>
            <button id="siguiente" class="col-start-2">Siguiente<span class="material-symbols-outlined">play_arrow</span></button>
        </div>
    </div>
</body>
</html>