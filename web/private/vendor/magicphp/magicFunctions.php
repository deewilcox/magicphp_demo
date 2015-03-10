<?php

namespace Magic;

class MagicFunctions {

    public function __construct() {
        parent::__construct();
    }

    public static function &getInstance() {
        static $obj;
        if (!$obj) {
            $obj = new MagicFunctions();
        }
        return $obj;
    }

    
}
