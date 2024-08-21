<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\ExerciciosController;




Route::get('/', function () {
    return view('welcome');
});


route::get('/inicial/{nome}', function ($nome) {
    return "Olá mundo! João não tem composer". $nome;
});

route::get('/exercicio1', function() {
    return view('exercicio1');
});



route::post('/reposta_exercicio1', [Exercicio1Controller::class, 'calcularJuros']);

Route::get('/exer1', [ExerciciosController::class, 'mostrarFormulario1']);

Route::post('/exer1resp', [ExerciciosController::class, 'calcularFormulario1']);