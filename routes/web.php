<?php

use Illuminate\Support\Facades\Route;

Route::get('/page_cv', function () {
    return view('page.page_cv');
});
