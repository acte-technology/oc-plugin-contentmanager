<?php


Route::get('/api/data', 'Acte\ContentManager\Controllers\Api\Elements@index');

//TEST
Route::get('/api/fields', 'Acte\ContentManager\Controllers\Api\Elements@getFields');
