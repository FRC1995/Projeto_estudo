<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {

       $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'N',
            'CNPJ' => '0',
            'DDD' => '11',
            'telefone' => '0000-0000'
            ],

            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S',
                'CNPJ' => 'null',
                'DDD' => '85',
                'telefone' => '0000-0000'
            ],

            2 => [
                'nome' => 'Fornecedor 3', 
                'status' => 'S',
                'CNPJ' => 'null',
                'DDD' => '32',
                'telefone' => '0000-0000'
            ]
       ];
/*
       condicao ? se verdade : se falso;
       condicao ? se verdade : (condicao ? se verdade : se falso;);

*/

$msg = isset($fornecedores[0]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado';
echo $msg;
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}