<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    $array_pasta = config('pasta');
    $collezione_pasta = collect($array_pasta);
    $pasta_lunga = $collezione_pasta->where('tipo', 'lunga');
    $pasta_corta = $collezione_pasta->where('tipo', 'corta');
    $pasta_cortissima = $collezione_pasta->where('tipo', 'cortissima');

    $pasta = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('prodotti', $pasta);
})->name('pagina-prodotti');

Route::get('/dettaglio-prodotti/{id}', function ($id) {
    $array_pasta = config('pasta');
    if (is_numeric($id) && $id >= 0 && $id < count($array_pasta)) {
        $prodotto = $array_pasta[$id];

        $pasta = [
            'formati' => $prodotto
        ];

        return view('dettagli', $pasta);
    }else {
        abort('404');
    }

})->name('dettaglio-prodotti');


Route::get('/news', function () {
    return view('news');
})->name('news');
