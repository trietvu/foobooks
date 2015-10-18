<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BookController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return view('books.get');
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
     public function getShow($title = NULL) {
     return view('books.show')->with('title', $title);
 }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
      return view('books.create');
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book: '.$_POST['title'];
    }
}
