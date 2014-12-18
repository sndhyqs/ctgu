<?php

/**
 * @author 晏青山
 * @datetime 2014-12-1  14:02:07
 * @version 1.0
 */
class Controller_Api_Ctgu extends Controller {

    protected $ctgu; //教务处的操作对象
    protected $username;
    protected $password;
    private $message;

    public function action_course() {
        
    }

    public function action_index() {
        
    }

    private function login() {
        $username = $this->request->query('username');
        $password = $this->request->query('password');
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
        } else {
            throw new Exception("学号或者密码为空", 4, NULL);
        }
        $this->ctgu = new Ctgu($this->username, $this->password);
        if (!$this->ctgu->get_login_tag()) {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo "登入<br/>";
            $login_tag = $this->ctgu->login();
            if ($login_tag === TRUE) {
                Model::factory('user')->save_user($this->username, $this->password);
            } else {
                echo $login_tag;
            }
        } else {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo '缓存<br/>';
        }
    }

    public function before() {
        parent::before();
        try {
            $this->login();
        } catch (Exception $exc) {
            BaseMessage::instance($exc->getCode(), $exc->getMessage(), null)->show();
        }
    }

    public function show() {
        echo $this->message;
        exit();
    }

}
