<?php

namespace HFB\app\midware\service;

use Hexagon\system\log\Logging;

class TestService {
    
    use Logging;
    
    public function test($param) {
        self::_logInfo($param);
        return 123;
    }
    
}