<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historia;
use ZipArchive;

class historiaController extends Controller
{
    //
    public function ver_intro(){
        $historia=historia::all()->last();
        return view('introduccion',['historia'=>$historia]);
    }
    public function registrar(Request $request){
       
        $imagen = $request->file('imagen');
       

        $imagen->storeAs('public/files','imagen.jpg');
        
        $zip=new ZipArchive;
        if($zip->open(public_path($request->titulo.'.zip'),ZipArchive::CREATE)==TRUE){
            $zip->addFile(storage_path('app/public/imsmanifest.xml'),'imsmanifest.xml');
            
            $zip->addEmptyDir('files');
            $zip->addFile(storage_path('app/public/files/historia.html'),'files/historia.html');
            $zip->addFile(storage_path('app/public/files/historia.css'),'files/historia.css');
            
            $string=$request->palabras_claves.'\n'.$request->ocurrencia;
            $zip->addFromString('files/palabras.txt',$string);

            $zip->addFile(storage_path('app/public/files/imagen.jpg'),'files/imagen.jpg');
            $zip->close();
        }
       
        return response()->download(public_path($request->titulo.'.zip'));
    }
}
