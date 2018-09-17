<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller {

    protected $contato;
    
    public function save(Request $request){        
        if ($request->isMethod('get')){
            $data = $request->toArray();
            $contato = new Contato();
            
            $contato->nome = mb_strtoupper($data['nome'], 'utf-8');
            $contato->telefone = $data['telefone'];
            $contato->email = mb_strtoupper($data['email'], 'utf-8');
            
            $contato->save();
            return response()->json(['response' => 'Salvo com sucesso!']);
        }
        return response()->json(['response' => 'erro ao salvar']);
    }
    
    public function findAll(Request $request){
        $result = Contato::all()->toArray();
        return $result;
    }   
    
}
