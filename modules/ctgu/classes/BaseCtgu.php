<?php

/**
 * @filename BaseCtgu.php 
 * @author 晏青山
 * @datetime 2014-11-24  11:31:01
 * @version 1.0
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
        "txtPassword" => '138855',
        "txtUserName" => '2011112243',
    );

    public function __construct() {

        $this->config = Kohana::$config->load('ctgu');
        $this->cookie = Cache::instance()->get('cookie');
        if ($this->cookie == null) {
            $this->login();
        }
    }

    public function login() {
        $check_code_url = $this->config->get('check_code');
        try {
            $this->execute = Request::factory($check_code_url)->execute();
        } catch (Exception $exc) {
            exit();
        }
        $this->set_check_code();
        if ($this->cookie != NULL) {
            $http = new HttpClient($this->cookie);
            $http->post($this->config->get('base'), $this->login_param);
            Cache::instance()->set("cookie", $this->cookie, 1200);
            $this->login_tag = TRUE;
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

    private function set_check_code() {
        $code_file = $this->execute->body();
        file_put_contents(APPPATH . '/data/temp.jpg', $code_file);
        $checkCode = new Check_Code;
        $code = $checkCode->discernCheckCode();
        if (strlen($code) == $this->check_code_len) {
            $this->sccuss_tag = TRUE;
            $this->login_param['CheckCode'] = $code;
            $this->cookie = $this->execute->headers('set-cookie');
        }
    }

    public function get_login_tag() {
        return $this->login_tag;
    }

}
