<?php

class ReviewsController
{
    public function __construct()
    { 
        // render('reviews/index', ['title'=>"Reviews Class"]); 
    }

    public function index(){
        render('reviews/index', ['title'=>"Reviews Page Class"]); 
    }
}

// render('reviews/index');

