<?php
class View {
    
    function generate($module, $content_view, $template_view, $data = null) {
        include 'views/'.$template_view;
    }
}