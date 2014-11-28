<?php

/**
 * @filename home.php 
 * @author 晏青山
 * @datetime 2014-11-20  17:37:18
 * @version 1.0
 */
defined('SYSPATH') or die('No direct script access.');

class Controller_Ctgu_CtguMain extends Controller_Main {

    protected $ctgu;
    protected $username;
    protected $password;
    private $message;

    private function login() {
        $username = Session::instance()->get('username');
        $password = Session::instance()->get('password');
        if ($username == NULL || $password == NULL) {
            $username = $this->request->query('username');
            $password = $this->request->query('password');
        }
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
        } else {
            $this->redirect('/');
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
        parent::before();
        $this->login();
    }

    public function show() {
        echo $this->message;
        exit();
    }

}










    