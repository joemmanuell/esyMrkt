<?php

use App\Models\Campaign;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('campaigns', [
        'heading' => 'Latest Campaign',
        'campaigns' => Campaign::all()

    ]);
});
/*
Route::get('/campaigns/{id}', function ($id) {
    return view('campaign', [
        'campaigns' => Campaign::find($id)

    ]);
});
*/


Route::get('/db', function () {
    return view('dashboard');
});
