<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedor = [
            0 => ['nome'    =>'Forncedor 1', 
                  'status'  =>'N']
                ];
        return view('app.fornecedor.index', compact('fornecedor'));
    }
}
    