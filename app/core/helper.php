<?php

namespace MVC\core;

class helper{

    public static function redirect($path){
        header("LOCATION: http://mvc.test/",$path);
    }
}
