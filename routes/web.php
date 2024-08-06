<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::get('/',             [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos',    [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato',      [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login',        [LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', [ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'Rota acessada não existe. <a href="'.route('site.index').'">Clique aqui para ir ao site correto</a>';
});
