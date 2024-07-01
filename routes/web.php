<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/page/register', [\App\Http\Controllers\PageController::class, 'create'])->name('page.create');
Route::get('/page/{page:slug}/delete', [\App\Http\Controllers\PageController::class, 'delete'])->name('page.delete');
Route::get('/page/{page:slug}/updateSlug', [\App\Http\Controllers\PageController::class, 'updateSlug'])->name('page.updateSlug');
Route::get('/page/{page:slug}/games', [\App\Http\Controllers\GameController::class, 'index'])->name('page.game.index');
Route::get('/page/{page:slug}/roll-game', [\App\Http\Controllers\GameController::class, 'roll'])->name('page.game.roll');
Route::get('/page/{page:slug}', [\App\Http\Controllers\PageController::class, 'view'])->name('page.view');


