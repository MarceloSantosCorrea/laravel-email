<?php

use MarceloCorrea\LaravelEmail\Http\Controllers\EmailController;

$middlewares = [
    config('email-service.routes.is_auth') ? "auth" : null,
];

Route::group(["middleware" => $middlewares], function () {
    Route::get('email', [EmailController::class, 'index'])->name('email-service.index');
    Route::get('email/create', [EmailController::class, 'create'])->name('email-service.create');
    Route::post('email/store', [EmailController::class, 'store'])->name('email-service.store');
    Route::post('email/edit/{uid}', [EmailController::class, 'edit'])->name('email-service.edit');
    Route::put('email/update/{uid}', [EmailController::class, 'update'])->name('email-service.update');
    Route::put('email/delete/{uid}', [EmailController::class, 'delete'])->name('email-service.delete');
});

