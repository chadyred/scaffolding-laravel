<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('{n}/{t?}', [
    'as' => 'number',
    fn ($n, $t = null) => 'Je suis sur la page ' . $n . ':' . $t ??= 'Rien dans t'
])
    ->where('n', '[1-3]')
;

Route::get('/foo', [
    'as' => 'foo',
     fn () => view('vue1')
]);

Route::get('/bar/{n}/{f}/{b}', [
    'as' => 'bar',
    fn ($n, $f, $b) => view('vue2', ['thirdArg' => $b])
        ->with('num', $n)
        ->withSecondArg($f)
]);

//$this->app['router']->get('/foo', fn () => 'foo'); // Not work as app is undefined
