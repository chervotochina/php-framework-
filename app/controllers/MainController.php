<?php

namespace app\controllers;


use RedBeanPHP\R;
use wfm\Controller;

class MainController extends Controller
{
 public false|string $layout = 'default';
    public function indexAction() {
      //  $this->layout = 'default';
     //   echo __METHOD__;
        $this->setMeta('Тайтл','Описание','кейв');
        // $this->set(['test' => 'test var','name' => 'John',]);

        $names = ['test' , 'test var','name' , 'John',];
        $names = R::findAll('name');
        debug ($names);
        $this->set(['names' => $names]);
        $this->set(compact('names'));
    }
}
