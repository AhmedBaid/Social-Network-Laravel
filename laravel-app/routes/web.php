<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route; //facade route :(route::(get/post/put/patch/connect/delete/update))
//patch :modification partiele   || put :modification complete || delete :supprimer  || get:lecture || post :ajouter
use Illuminate\Http\Request;



Route::get('/', [homecontroller::class, 'index'])->name('homepage.index');
Route::get('/login', [LoginController::class, 'show'])->name('show.login');
Route::post('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/Profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/Profiles/create', [ProfileController::class,'create'])->name('profiles.create');
Route::post('/Profiles/store', [ProfileController::class,'store'])->name('profiles.store');
Route::get('/settings', [InformationController::class, 'index'])->name('settings.index');
Route::get('/Profiles/{profile}', [ProfileController::class, 'show'])
    ->where('profile', '\d+')
    ->name('profiles.show');



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
