<?php
  // file: routes.php
  Route::get('/', function () { 
    return view('home'); 
  });
  Route::resource('book', 'BookController');
  Route::resource('author', 'AuthorController');
  Route::resource('publisher', 'PublisherController');

  Route::dispatch();
?>