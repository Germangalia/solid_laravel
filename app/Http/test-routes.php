<?php


Route::group(['middleware' => ['web']], function () {

    Route::get('testSendEmail', 'ContactEmailController@sendEmail');

});
