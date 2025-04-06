<?php

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        if (file_exists($file = '../app/Views/' . $view . '.php')) {
            return file_get_contents($file);
        } else {
            return file_get_contents('../app/Views/_404.php');
        }
    }
}