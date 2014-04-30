<?php


// Production
//Route::post( '/{q?}',array('uses' => 'BookstoreControllerTwo@create','as' => 'bookstore.create'));

Route::get('/', array('uses' => 'BookstoreController@add','as' => 'bookstore.add'));

Route::post( '/{q?}',array('uses' => 'BookstoreController@ajaxcreate','as' => 'bookstore.ajaxcreate'));

/*

Route::post( '/bookstore',array('uses' => 'BookstoreControllerTwo@create','as' => 'bookstore.create'));

Route::get('/bookstore', array('uses' => 'BookstoreControllerTwo@add','as' => 'bookstore.add'));

Route::post( '/bookstore{search}',array('uses' => 'BookstoreControllerTwo@live','as' => 'bookstore.search'));

*/

