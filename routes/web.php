<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Test\PrintedUnexpectedOutputSubscriber;
Route::get('/formulario', function(){

    return view("form");
});
Route::get('/contacto', function(Request $request) {
    echo "<pre>";
    print_r($request->get('nombre'));
    echo "</pre>";

});

Route::get('/php-basico', function () {

    echo "<h1> Variables... </h1> ";

    $nombre = "Brayan ";
    $apellido = "Olaya";
    $nombre_completo = $nombre . $apellido;
    $age = rand(10,54);
    $height = 1.75;
    $islogin = (bool) rand(0,1);

    echo $nombre_completo;

    echo "<br><br><br>************** ESTRUCTURA BASE DE DATOS **************";
    $message = "<br> <br>soy $nombre_completo tengo $age años!!!";
    
    if ($age <18 ){
        $message = $message . "soy menor de edad. ";
    } else if ($age >50){
        $message .= " Eres adulto mayor.";
    } else{
        $message .= " Eres adulto.";
    }
    echo $message;
    $message .= " " .($islogin ? "Estas logueado" : "no estas logueado" );

    echo "********** FUNCIONES **********";

    echo printUser($nombre_completo, $age);

    $productsNames = ["Computador", "Teclado", 25, true, false];
    $teclado = [
        'name' => "teclado hp",
        'marca' => "HP",
        'distribuciones' => [
            'latino',
            'mexicoo',
            'americano'
        ]
    ];

    $teclado['marca'] = "LG";
    echo $teclado['name'];

    foreach ($productsNames as $item){
        echo$item;
    }
});

function printUser(string $name,int $age){
    return "$name tiene $age años!!!";
}
