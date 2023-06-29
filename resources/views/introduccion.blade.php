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
            
               
         
            </ul>
        </div>
        <div id="main" class="col-span-4 cont">
            <h3 class="text-center text-2xl col-span-2">{{$historia->titulo}}</h3>
            <div class=" grid grid-cols-2 gap-5 mt-5" >
                <div class="border border-slate-300 rounded-lg form1">
                    <h1>Escriba una breve introducción de la historia</h1>
                    <div id="opt" class=" border border-slate-300 w-1/6 rounded-lg">
                        <span class="material-symbols-outlined pl-5">notes</span>
                    </div>
                    <textarea name="introduccion" id="intro" cols="50" rows="10"></textarea>

                </div>
                <div>
                    <div class="border border-slate-300 rounded-lg form">
                        <h1>Imagen de referencia:</h1>
                        <img src="data:image/jpeg;base64,{{ base64_encode($historia->imagen) }}" alt="Imagen" id="img">
                    </div>
                </div>
            </div>
            <button id="siguiente" class="col-start-2">Siguiente<span class="material-symbols-outlined">play_arrow</span></button>
        </div>
    </div>
</body>
<script>
    var boton = document.getElementById("siguiente");
    var intro = document.getElementById('intro');
    boton.onclick=function(){
        var texto= intro.value.split(" ");
        var palabras_claves= "{{$historia->palabras_claves}}".split(',');
        var contador=0;
        for(var i=0; i<texto.length ; i++){
            for(var j=0 ;j<palabras_claves.length; j++){
                if(texto[i] == palabras_claves[j]){
                    contador++;
                }
            }
        }
        var resultado = parseInt((contador/texto.length)*100);
    }
</script>
</html>