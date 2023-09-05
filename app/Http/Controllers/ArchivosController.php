<?php

namespace App\Http\Controllers;

use App\Models\Archivos;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function upload(Request $request)
    {
        $newArchivo = new Archivos();
        $newArchivo->file = $request->uploadFile;
        $newArchivo->save();
        return redirect('/uploading');
        // return var_dump($newArchivo->file);
    }
}