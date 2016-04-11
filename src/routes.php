<?php

Route::get('pages/manage', ['as' => 'pages.manage', 'uses' => '\claritytech\cms\controllers\PageController@manage']);
Route::resource('pages', '\claritytech\cms\controllers\PageController');
