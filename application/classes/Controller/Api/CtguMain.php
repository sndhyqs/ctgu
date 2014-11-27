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
    protected $message;

    private function login() {
        $username = $this->request->query('username');
        $password = $this->request->query('password');
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
        } else {
            exit();
        }
        $this->ctgu = new Ctgu($this->username, $this->password);
        if (!$this->ctgu->get_login_tag()) {
            echo "登入<br/>";
            $login_tag = $this->ctgu->login();
            if ($login_tag === TRUE) {
                Model::factory('user')->save_user($this->username, $this->password);
            } else {
                echo $login_tag;
            }
        } else {
            echo '缓存<br/>';
        }
    }

    public function before() {
        $this->login();
        parent::before();
    }

    public function show() {
        echo $this->message;
        exit();
    }

}

// End Welcome








    