<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route; //facade route :(route::(get/post/put/patch/connect/delete/update))
//patch :modification partiele   || put :modification complete || delete :supprimer  || get:lecture || post :ajouter
use Illuminate\Http\Request;



Route::get('/',[homecontroller::class,'index']);
Route::get('/Profile',[ProfileController::class,'profile']);
Route::get('/settings',[InformationController::class,'information']);

// Route::get('/salam/{nom1}/{prenom1}', function(Request $request) {
//     return view('salam', [
//         'nom' => $request->nom1,
//         'prenom' => $request->prenom1,
//     ]);
// });


// Route::get('/laravel', function () {
//     return 'HELLO laravel !!';
// });

// Route::get('/react', function () {
//     return 'HELLO REACT!!';
// });

// Route::get('/page/{num}', function ($numero) {
//     return 'Je suis la Page ' . $numero;
// });




