<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('GradosTitulos', function () {
    return "Bienvenido a la pagina principal de Gestion de grados y titulos";
});


Route::get('GradosTitulos/create', function () {
    return "En esta pagina se registrara los grados y titulos";
});


Route::get('GradosTitulos/{registro}/{practicante}', function ($registro,$practicante = null) {
    if($practicante){
        return "Bienvenido al registro $registro, del practicante $practicante";
    }
    else {
        return "Binevenido al registro $registro";
    }

});


Route::get ('/',HomeController::class);
















