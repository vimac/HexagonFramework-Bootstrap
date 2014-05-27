<?php

namespace HFB\app\controller;

use Hexagon\controller\Controller;
use Hexagon\controller\ICustomAction;
use Hexagon\Framework;
use HFB\app\midware\service\TestService;
use \Yar_Server;

class RpcController extends Controller implements ICustomAction {
    
    public function _doAction() {
        $service = new Yar_Server(new TestService());
        $service->handle();
        return self::_ignoreFrameworkResult();
    }
    
}