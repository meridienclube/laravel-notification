<?php

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\Notification\Controllers')
    ->group(function () {

        Route::prefix('notifications')
            ->name('notifications.')
            ->group(function () {

                Route::get('{id}/markAsRead', 'NotificationController@markAsRead')->name('markasread');

            });
    });