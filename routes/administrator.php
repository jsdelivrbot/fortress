<?php

Route::get('/','AdminController@index')
    ->name('dashboard');

Route::post('/','AdminController@index')
    ->name('dashboard');


Route::get('/list', 'AdminController@show')
    ->name('admins.list');


Route::group(['middleware' => 'superAdmin'], function () {

    Route::get('/create', 'AdminController@form')
        ->name('admin.form.create');

    Route::post('/create', 'AdminController@create')
        ->name('admin.create');

});

Route::prefix('profile')->group(function () {

    Route::get('/look/{id}', 'ProfileController@show')
        ->where('id', '[0-9]+')
        ->name('look.profile');

    Route::get('/{id?}', 'ProfileController@edit')
        ->where('id', '[0-9]+')
        ->name('profile');

    Route::post('/edit/avatar', 'ProfileController@updateAvatar')
        ->name('profile.update.avatar');

    Route::post('/edit/info', 'ProfileController@updateInfo')
        ->name('profile.update.info');

    Route::post('/edit/password', 'ProfileController@updatePassword')
        ->name('profile.update.password');

    Route::group(['middleware' => 'superAdmin'], function () {

        Route::post('/destroy/{id}', 'ProfileController@destroy')
            ->where('id', '[0-9]+')
            ->name('destroy.profile');

    });
});

Route::prefix('content')->group(function () {

    Route::get('/','ContentController@index')
        ->name('content.index');

    Route::post('/edit/{id}','ContentController@edit')
        ->where('id', '[0-9]+')
        ->name('content.edit');

    Route::post('edit/all','Controller@store')
        ->name('content.edit.all');


    Route::prefix('lang')->group(function () {
        Route::get('/', 'LangController@index')
            ->name('lang.index');

        Route::get('/{id}', 'LangController@show')
            ->where('id', '[0-9]+')
            ->name('lang.show');

        Route::post('/{id}', 'LangController@edit')
            ->where('id', '[0-9]+')
            ->name('lang.edit');

        Route::post('/destroy/{id}', 'LangController@destroy')
            ->where('id', '[0-9]+')
            ->name('lang.destroy');
    });


});


Route::prefix('chat')->group(function () {

    Route::get('/','ChatController@index')->name('chat');

    Route::get('/find/{id}','ChatController@findChat')
        ->where('id', '[0-9]+')
        ->name('chat.find');

    Route::get('/{id}','ChatController@dialog')
        ->where('id', '[0-9]+')
        ->name('dialog');

    Route::post('/{id}','ChatController@message')
        ->where('id', '[0-9]+')
        ->name('message');

});
