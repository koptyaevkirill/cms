<?php
class urlManager {
    static function parseURL() {
        return explode('/', parse_url($_SERVER['REQUEST_URI'])['path']);
    }
    
}
