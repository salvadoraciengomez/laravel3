<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Solving GitHubCredentials

//NOTA1
//Default route
// Route::get('/', function () {
//     return view('welcome');
// });

//NOTA2
//Devuelve el json del array
//Route::get('/', function () {
//    return ['myKey' => 'myValue'];
//});


//NOTA3
//Llama al resources/views/test.blade.php
// Route::get('test', function(){
//     return view('test');
 //});

//NOTA4
//Muestra la variable recogida en la request GET http://localhost:8080/?variable=hola
// Route::get('/', function(){
//     $getVar=request('variable');
//     return $getVar;
// });

//NOTA5
Route::get('/', function () {
   $variable = request('variable');
   return view('test',[
       'variable' => $variable
        //segundo parámetro del view() es un array al que se le pasa en la clave el nombre que la vista cargará desde dicha variable local 
        //hacia la nueva variable que la vista (valor de la clave) cargará entre la etiqueta <?= $variable
        //Para enviar el valor hacia la vista, sin el array, solamente haría falta usar <?= {{ $variable }}
        //Inyección JS desde GET http://localhost:8080/?variable=<script>alert("does")</script>
   ]);
});


#NOTA6 Recoge variable $elPost (GET) y devuelve la clave del array
Route::get('posts/{entradas}', function($elPost){
    //return view('posts');

    $entradas=[
        'entry' => 'Texto de la primera entrada',
        'entry2'=> 'UYUYUYUYUMigatohace'
    ];

    #Nota7
    if (! array_key_exists($elPost, $entradas)) abort(404,'No se ha encontrado la clave del array');

    return view('posts', [
        'elPost' => $entradas[$elPost] //?? 'Default option if no key match' VER NOTA7
    ]);

});



Route::get('/controlador/{elPost}', [EntriesController::class,'show']);

