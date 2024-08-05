<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;


Route::get('/',             [PrincipalController::class, 'principal']);
Route::get('/sobre-nos',   [SobreNosController::class, 'sobrenos']);
Route::get('/contato',      [ContatoController::class, 'contato']);

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}',
 function(string  $nome,string $categoria,string $assunto,string $mensagem)
{
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});



