<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if (file_exists('../app/Controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require '../app/Controllers/' . ucfirst($this->controller) . '.php';

        $this->controller = new $this->controller();

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = strtolower($url[1]);
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        echo '<pre>';
        print_r($this->params);
        echo '</pre>';

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function getUrl()
    {
        $url = $_GET['url'] ?? $this->controller;

        return explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));
    }
}