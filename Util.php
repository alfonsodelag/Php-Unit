<?php

class Util {
    
    public function convertToSlug($text){
        //$text = "hello everyone I am Alfonso";
        $result = str_replace(" ", "-", $text); 
        echo $result;
    }
}

