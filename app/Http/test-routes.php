<?php


Route::group(['middleware' => ['web']], function () {

    Route::get('testSendEmail', 'ContactEmailController@sendEmail');

    Route::get('/job', function () {
        Debugbar::starMesure('SendSubscriptionEmail');
        dispatch(new App\Jobs\PerformTask);
        Debugbar::stopMesure('SendSubscriptionEmail');
        return 'Done!';
    });

});
