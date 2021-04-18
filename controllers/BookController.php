<?php
  // file: controllers/BookController.php

  require_once('Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>Book::all(),
        'title'=>'books List']);
    }

    public function show($id) {
      $bok = Book::find($id);
      return view('book/show',
        ['book'=>$prof,
         'title'=>'Book Detail']);
    }
  }
?>