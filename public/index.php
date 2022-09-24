<?php

if (PHP_MAJOR_VERSION < 8) {
    die('need php 8+');
}

require_once dirname(__DIR__).'/config/init.php';

new \wfm\App();


throw new Exception('Ошибкус');