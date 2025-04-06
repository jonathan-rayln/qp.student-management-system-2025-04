<?php

class Home extends Controller
{
    public function __construct() {}

    public function index()
    {
        echo $this->view('home', [
            'var' => 'foo'
        ]);
    }
}