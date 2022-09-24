<?php

namespace wfm;

class App
{
    public static $app;

    public function __construct()
    {
        self::$app = Registry::getInstance();
        $this->getParams();
    }

    protected function getParams() {
        $params = include_once CONFIG . '/params.php';
            if(!empty($params)) {
                foreach ($params as $k => $v) {
                    self::$app->setProperty($k, $v);
                }
            }
    }
}