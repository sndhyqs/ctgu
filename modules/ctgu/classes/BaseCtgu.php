<?php

/**
 * @filename BaseCtgu.php 
 * @author 晏青山
 * @datetime 2014-11-24  11:31:01
 * @version 1.0
 * 基本的ctgu操作类，包含登陆操作，以及http请求;
 */
class BaseCtgu {

    private $check_code_len = 4;
    private $cookie = NULL;
    private $execute;
    private $login_tag = FALSE;
    protected $config;
    private $login_param = array(
        "__EVENTVALIDATION" => "/wEWBQLsrKSiDwKl1bKzCQKC3IeGDAK1qbSRCwLO44u1DW1K6e1+jsPEQxbgL4N9Ze0RznXg",
        "__VIEWSTATE" => "/wEPDwUKMTQ4NjM5NDA3OQ9kFgICAw9kFgICCw8PFgIeBFRleHQFIueZu+W9leWksei0pe+8miDpqozor4HnoIHkuI3lr7nvvIFkZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUIYnRuTG9naW4f5vzIScELerkioTADRM3OJ2n+dg==",
        "btnLogin.x" => "23",
        "btnLogin.y" => "15",
        "CheckCode" => '',
        "txtPassword" => '',
        "txtUserName" => '',
    );
    private $error;

    public function __construct($userame, $password) {
        $this->login_param['txtUserName'] = $userame;
        $this->login_param['txtPassword'] = $password;
        $this->config = Kohana::$config->load('ctgu');
        $this->error = Kohana::$config->load('error');
        $this->cookie = Cache::instance()->get('ctgu_' . $this->login_param['txtUserName']);
        if ($this->cookie != NULL) {
            $this->login_tag = TRUE;
        }
    }

    /**
     * 
     */
    public function login() {
        if (Kohana::$environment === Kohana::DEVELOPMENT)
            echo "登陆方法开始<br/>";
        $check_code_url = $this->config->get('check_code');
        if (Kohana::$environment === Kohana::DEVELOPMENT)
            echo "读取验证码开始<br/>";
        try {
            $this->execute = Request::factory($check_code_url)->execute();
        } catch (Exception $e) {
            BaseMessage::instance(1, $this->error->get(1))->show();
            exit();
        }
        if (Kohana::$environment === Kohana::DEVELOPMENT)
            echo "验证码检测 <br/>";
        if (!$this->set_check_code()) {
            BaseMessage::instance(3, "验证码解析失败")->show();
            exit();
        }
        if ($this->cookie != NULL) {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo "开始登陆 <br/>";
            $http = new HttpClient($this->cookie);
            $login_html = $http->post($this->config->get('base'), $this->login_param);
            $login_tag = Analysis_Ctgu::get_login_message($login_html);
            if (is_bool($login_tag) && $login_tag == TRUE) {
                if (Kohana::$environment === Kohana::DEVELOPMENT)
                    echo "登陆成功<br/>";
                Cache::instance()->set('ctgu_' . $this->login_param['txtUserName'], $this->cookie, 1200);
                $this->login_tag = TRUE;
                return $this->login_tag;
            } else {
                return $login_tag;
            }
        }
    }

    /**
     * 
     * @param type $url
     */
    public function get($url) {
        $http = new HttpClient($this->cookie);
        return $http->get($url);
    }

    public function post($url, $dataArray) {
        $http = new HttpClient($this->cookie);
        return $http->post($url, $dataArray);
    }

    public function login_out() {
        if ($this->login_tag) {
            $http = new HttpClient($this->cookie);
            $http->get($this->config->get('login_out'));
            Cache::instance()->delete('ctgu_' . $this->login_param['txtUserName']);
        }
    }

    private function set_check_code() {
        $code_file = $this->execute->body();
        file_put_contents(APPPATH . '\data\temp.jpg', $code_file);
        $checkCode = new Check_Code;
        $code = $checkCode->discernCheckCode();
        if (strlen($code) == $this->check_code_len) {
            $this->sccuss_tag = TRUE;
            $this->login_param['CheckCode'] = $code;
            $this->cookie = $this->execute->headers('set-cookie');
            return TRUE;
        }
        return FALSE;
    }

    public function get_login_tag() {
        return $this->login_tag;
    }

}
