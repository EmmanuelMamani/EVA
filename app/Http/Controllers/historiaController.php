<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historia;
class historiaController extends Controller
{
    //
    public function ver_intro(){
        $historia=historia::all()->last();
        return view('introduccion',['historia'=>$historia]);
    }
    public function registrar(Request $request){
        $historia =new historia();
        $historia->titulo= $request->titulo;
        $historia->genero= $request->genero;
        $historia->palabras_claves= $request->palabras_claves;
        $imagen = $request->file('imagen');
        $imagenBinaria = file_get_contents($imagen);
        $historia->imagen = $imagenBinaria;
        $historia->ocurrencia=$request->ocurrencia;
        $historia->save();
        return redirect('/introduccion');
    }
}
