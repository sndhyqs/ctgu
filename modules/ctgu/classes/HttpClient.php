<?php

/**
 * @filename Http.php 
 * @author 晏青山
 * @datetime 2014-11-21  15:02:18
 * @version 1.0
 */
class HttpClient {

    private $cookie;
    private $handle;
    private $check_code;
    private $param = array(
        "__EVENTVALIDATION" => "/wEWBQLsrKSiDwKl1bKzCQKC3IeGDAK1qbSRCwLO44u1DW1K6e1+jsPEQxbgL4N9Ze0RznXg",
        "__VIEWSTATE" => "/wEPDwUKMTQ4NjM5NDA3OQ9kFgICAw9kFgICCw8PFgIeBFRleHQFIueZu+W9leWksei0pe+8miDpqozor4HnoIHkuI3lr7nvvIFkZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUIYnRuTG9naW4f5vzIScELerkioTADRM3OJ2n+dg==",
        "btnLogin.x" => "23",
        "btnLogin.y" => "15",
        "CheckCode" => '',
        "txtPassword" => '138855',
        "txtUserName" => '2011112243',
    );

    public function __construct($check_code, $cookie = NULL) {
        $this->check_code = $check_code;
        $this->cookie = $cookie;
        $this->param['CheckCode'] = $this->check_code;
        $this->handle = curl_init();
        $this->init();
    }

    private function init() {
        curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, 1); //返回获取的输出文本流
        if ($this->cookie != NULL && $this->cookie != "") {
            curl_setopt($this->handle, CURLOPT_COOKIE, $this->cookie);
        }
    }

    public function get($url) {
        $data = http_build_query($this->param, '&');
        curl_setopt($this->handle, CURLOPT_URL, $url);
        curl_setopt($this->handle, CURLOPT_POSTFIELDS, $data);

        return $this->execue();
    }

    /**
     * 
     * @param type $url
     * @param type $p
     */
    public function post($url) {
        curl_setopt($this->handle, CURLOPT_URL, $url);
        return $this->execue();
    }

    public function execue() {
        $content = curl_exec($this->handle);
        return $content;
    }

}
