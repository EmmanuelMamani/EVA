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
    <form action="{{route('Registrar_hisotoria')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-5">
            <div id="side" class="cont shadow-lg shadow-slate-500">
                <ul class="list-disc">
                    <li class="pb-5"><a href="{{route('inicio')}}">Datos generales</a></li>
                   
                </ul>
            </div>
            <div class=" col-span-4 cont grid grid-cols-2 gap-5" id="main">
                <div class="border border-slate-300 rounded-lg form ">
                    <h3 class="text-center">Datos de la historia</h3>
                    <label for="">Genero:</label>
                    <input type="text" class="texto" name="genero">
                    <label for="">Titulo</label>
                    <input type="text" class="texto" name="titulo">
                   
                </div>
                <div class="border border-slate-300 rounded-lg form">
                    <h3 class="text-center">Requerimientos:</h3>
                    <label for="">Palabras claves:</label>
                    <input type="text" class="texto" name="palabras_claves">
                    
                    <label>Imagen de referencia:</label>
                    <input type="file" name="imagen" class="texto">
                    <label>Porcentaje de ocurrencia:</label>
                    <input type="number" class="texto" name="ocurrencia">
                </div>
                <button id="siguiente" class="col-start-2">GENERAR SCORM<span class="material-symbols-outlined">play_arrow</span></button>
            </div>
        </div>
    </form>
</body>
</html>