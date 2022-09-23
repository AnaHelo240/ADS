<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class Controle extends Controller
{
    
public function cadastro(Request $request)
{
    $dataform = $request->all();

    $historia = new Cadastro();
    $historia->capitulo = $dataform['capitulo'];
    $historia->titulo = $dataform['titulo'];
    $historia->sinopse = $dataform['sinopse'];
    $historia->data = date("d-m-Y");
    $historia->save();

    $path = '/app/public/caps/'.$historia->id;
    $i = 0;

    foreach($dataform['arquivo'] as $key => $file) {
        $image = $file;
        $nameimage = $i++.'.'.$image->getClientOriginalExtension();
        $uploadFiles = $image->storeAs($path, $historia->id."-".$nameimage);
    }
    $hqs = Cadastro::orderBy('id', 'desc')->get();
    return view("home")->with('hqs', $hqs);
}
}
