<?php

namespace HFB\app\midware\service;

use Hexagon\system\log\Logging;

class TestService {
    
    use Logging;
    
    /**
     * 战斗吧
     * 
     * @param unknown $param
     * @return number
     */
    public function demoMethodEcho($param) {
        return $param;
    }
    
}