<?php

class BookstoreController
{
    public function index()
    {       
        render('bookstore/index', ['title'=>"BookStore collections Class"]);
    }
}


