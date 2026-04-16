<?php

return [
    '/' => 'BlogController@index',

    '/post' => 'BlogController@show',

    '/create' => 'BlogController@create',
    '/store' => 'BlogController@store',

    '/edit' => 'BlogController@edit',
    '/update' => 'BlogController@update',

    '/delete' => 'BlogController@destroy',
];