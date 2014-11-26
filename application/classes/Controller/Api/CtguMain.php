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
    private $username = '2011112243';
    private $password = '138855';

    private function login() {
        $username = $this->request->post('username');
        $password = $this->request->post('password');
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
        }
        $this->ctgu = new Ctgu($this->username, $this->password);

        if (!$this->ctgu->get_login_tag()) {
            echo "登入<br/>";
            echo $this->ctgu->login();
        } else {
            echo '缓存<br/>';
        }
    }

    public function before() {
        $this->login();
        parent::before();
    }

}

// End Welcome








    