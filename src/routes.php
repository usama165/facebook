<?php
Route::get('/facebook', function () {
    return 'hello,from usama165 pcakage';
});

// Route::get('/import', 'usama165\facebook\Controllers\TestController@importFile');
// Route::post('/import', 'usama165\facebook\Controllers\TestController@importExcel');
Route::get('/test', 'usama165\facebook\Controllers\TestController@index');
Route::get('/test1', 'usama165\facebook\Controllers\TestController@math');