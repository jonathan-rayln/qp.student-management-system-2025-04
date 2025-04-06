<?php

class Students extends Controller
{
    public function __construct() {}

    public function index($id)
    {
        echo $id;
        var_dump('this is Students::index');
    }
}