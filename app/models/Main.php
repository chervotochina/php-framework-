<?php

namespace app\models;

use RedBeanPHP\R;

class Main extends \wfm\Model
{
    public function getNames()
    {
        return R::findAll('name');
    }
}