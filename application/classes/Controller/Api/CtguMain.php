<?php

/**
 * @filename home.php 
 * @author 晏青山
 * @datetime 2014-11-20  17:37:18
 * @version 1.0
 */
defined('SYSPATH') or die('No direct script access.');

class Controller_Api_CtguMain extends Controller_Main {

    protected $ctgu;
    private $username;
    private $password;

    private function login() {
      echo  $username = $this->request->post('username');
      echo  $password = $this->request->post('password');

//        $this->ctgu = new Ctgu($this->username, $this->password);
//        echo $this->ctgu->login();
    }

    public function before() {
        $this->login();
        parent::before();
    }

}

// End Welcome








    