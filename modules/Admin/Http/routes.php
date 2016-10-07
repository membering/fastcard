<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/', [
        'as'    => 'admin.index',
        'uses'  => 'AdminController@index'
    ]);
});