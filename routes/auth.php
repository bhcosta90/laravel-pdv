<?php

declare(strict_types = 1);

use Illuminate\Support\Facades\Validator;

Route::get('login/{id?}', function (?string $id = null) {
    $errors = Validator::make(compact('id'), [
        'id' => 'required|integer|exists:users,id',
    ]);

    if (count($errors->messages())) {
        return $errors->messages();
    }

    auth()->loginUsingId($id);

    return redirect()->back();
})->name('login');
