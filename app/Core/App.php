<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();


        if (file_exists('../app/Controllers/' . ucfirst($this->controller) . '.php')) {
            $this->controller = $url[0];
        }

        require '../app/Controllers/' . ucfirst($this->controller) . '.php';

        $this->controller = new $this->controller();
    }

    private function getUrl()
    {
        $url = $_GET['url'] ?? $this->controller;

        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
    }
}