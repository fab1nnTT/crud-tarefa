<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
 
 
Route::get('/', function () {
    return view('welcome');
});
 
//Definição de rotas utilizando resource, serve para gerar automaticamente as rotas padrões para um Crud

Route::resource('/tarefa', TarefaController::class);