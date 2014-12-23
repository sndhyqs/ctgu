<?php

/**
 * @filename home.php 
 * @author 晏青山
 * @datetime 2014-11-20  17:37:18
 * @version 1.0
 * 
 * 流程
 * 1、获取是session是否成功
 * 2、不成功则检查是否有学号和密码的参数，没有则返回首页
 * 3、得到密码和学号进行登录
 */
defined('SYSPATH') or die('No direct script access.');

class Controller_Ctgu_CtguMain extends Controller_Main {

    protected $ctgu;
    protected $username;
    protected $password;
    private $message;
    protected $session_start = TRUE;
    protected $logined = FALSE;

    private function login() {
        $this->ctgu = new Ctgu($this->username, $this->password);
        if (!$this->ctgu->get_login_tag()) {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo "登入<br/>";
            $login_tag = $this->ctgu->login();
            if ($this->logined === TRUE || $login_tag === TRUE) {
                $this->logined = TRUE;
                $this->set_session();
                Model::factory('user')->save_user($this->username, $this->password);
            } else {
                echo $login_tag;
            }
        } else {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo '缓存<br/>';
            $this->logined = TRUE;
        }
    }

    public function before() {
        $this->ctgu_main_before();
        parent::before();
    }

    protected function ctgu_main_before() {
        if (!$this->check_user()) {
            $this->login();
        }
    }

    protected function check_user() {
        if ($this->session_start) {
            $this->get_session();
        }
        $username = NULL;
        $password = NULL;
        if ($this->username == NULL || $this->password == NULL) {
            $username = $this->request->query('username');
            $password = $this->request->query('password');
        } else {
            //返回true进行登录
            $this->ctgu = new Ctgu($this->username, $this->password);
            $this->logined = TRUE;
            return $this->logined;
        }
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
            //返回false进行登录
            return $this->logined;
        } else {
            $this->redirect('/login');
            exit();
        }
    }

    public function set_session() {
        Session::instance()->set("username", $this->username);
        Session::instance()->set("password", $this->password);
    }

    public function get_session() {
        $this->username = Session::instance()->get('username');
        $this->password = Session::instance()->get('password');
    }

    public function show() {
        echo $this->message;
        exit();
    }

}
