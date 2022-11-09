<?php

namespace app\controllers;


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
        $this->set(['names' => $names]);
        $this->set(compact('names'));
    }
}
