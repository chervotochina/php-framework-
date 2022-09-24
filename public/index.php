<?php

if (PHP_MAJOR_VERSION < 8) {
    die('need php 8+');
}

require_once dirname(__DIR__).'/config/init.php';

new \wfm\App();
echo \wfm\App::$app->getProperty('site_name');
/*
\wfm\App::$app->setProperty('test', 'TEST');
var_dump(\wfm\App::$app->getProperties());
*/
