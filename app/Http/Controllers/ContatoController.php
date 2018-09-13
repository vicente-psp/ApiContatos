<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller {
    
    public function save($contato){
        return $contato;
//        $teste = ['Teste 1', 'Teste 2'];
//        return $teste;
    }
    
    public function find($id){
        $result = \App\Contato::all();
        var_dump($result);die;
        return $result;
    }
    
}
