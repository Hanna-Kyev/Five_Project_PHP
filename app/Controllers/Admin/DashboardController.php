<?php

class DashboardController
{
    public function index()
    {       
        render('admin/index', ['title'=>"Dashboard"], 'admin');
    }
}
