<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use EloquentORM\User;

Route::get('/create', function () {
    $user = User::create([
        'name'      => 'Maria Victoria Gamez',
        'email'     => 'vicky-ghm@gmail.com',
        'password'  => bcrypt('123456'),
        'gender'    => 'f',
        'biography' => 'Novia de Miguel'
    ]);

    return ('Usuario Creado');
});

Route::get('/update-user', function () {
    $user=User::find(1);

    $user->gender = 'm';
    $user->biography = 'Futuro lcdo. en computación';

    $user->save();

    return ('Usuario Actualizado');

});
