<?php
class UrlManager {
    static function parseURL() {
        $url = explode('/', parse_url($_SERVER['REQUEST_URI'])['path']);
        array_shift($url);
        return $url;
    }
    
}
