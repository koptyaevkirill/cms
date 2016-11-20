<?php
class Router
{
    static function getRoute()
    {
        return parse_url($_SERVER['REQUEST_URI'])['path'];
    }
    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}

