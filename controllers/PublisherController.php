<?php
  // file: controllers/PublisherController.php

  require_once('Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'publishers List']);
    }

    public function show($id) {
      $pub = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$pub,
         'title'=>'Publisher Detail']);
    }
  }
?>