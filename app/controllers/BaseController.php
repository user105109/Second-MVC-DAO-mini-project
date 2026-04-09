<?php

namespace App\Controllers;

class BaseController {
    protected static $carObj;

    public static function redirect($route) {
        header("Location: index.php?page=$route");
    }

}