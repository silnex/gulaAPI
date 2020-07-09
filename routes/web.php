<?php

use App\G5Models\G5WriteFree;
use App\G5Models\G5WriteGallery;
use App\G5Models\G5WriteNotice;
use App\G5Models\G5WriteQa;
use Illuminate\Support\Facades\Route;

Route::get('/free', function () {
    return G5WriteFree::all();
});

Route::get('/qa', function () {
    return G5WriteQa::all();
});

Route::get('/notice', function () {
    return G5WriteNotice::all();
});

Route::get('/gallery', function () {
    return G5WriteGallery::all();
});