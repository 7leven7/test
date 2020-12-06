<?php


$router->get('' , 'CitrusController@index');

$router->post('comment','CommentController@store');

$router->get('login','AdminController@index');

$router->post('login','AdminController@adminLogin');

$router->get('admin','AdminController@adminPanel');

$router->post('approve','AdminController@update');


