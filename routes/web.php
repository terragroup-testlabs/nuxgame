<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('page')->group(function () {
    Route::post('register', [\App\Http\Controllers\PageController::class, 'create'])->name('page.create');
    Route::get('{page:slug}/delete', [\App\Http\Controllers\PageController::class, 'delete'])->name('page.delete');
    Route::get('{page:slug}/updateSlug', [\App\Http\Controllers\PageController::class, 'updateSlug'])->name('page.updateSlug');
    Route::get('{page:slug}/games', [\App\Http\Controllers\GameController::class, 'index'])->name('page.game.index');
    Route::get('{page:slug}/games/action/roll', [\App\Http\Controllers\GameController::class, 'roll'])->name('page.game.roll');
    Route::get('{page:slug}', [\App\Http\Controllers\PageController::class, 'view'])->name('page.view');
});


