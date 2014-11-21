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
        "__EVENTVALIDATION" => '%2FwEWBQK0rZn5BQKl1bKzCQKC3IeGDAK1qbSRCwLO44u1DRoeeCML9VwaJp827ywoonHLTN5B',
        "__VIEWSTATE" => '%2FwEPDwUKMTQ4NjM5NDA3OWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFCGJ0bkxvZ2luxH3FxhKrV5DSLNmTU4lmM%2B8noJI%3D',
        "btnLogin.x" => "23",
        "btnLogin.y" => "15",
        "txtUserName" => '2011112243',
        "txtPassword" => '13855',
    );

    public function __construct($check_code, $cookie = NULL) {
        $this->check_code = $check_code;
        $this->cookie = $cookie;
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
      
        curl_setopt($this->handle, CURLOPT_URL, $url);
       // curl_setopt($this->handle, CURLOPT_POSTFIELDS, $data);
        return $this->execue();
        /* -----使用COOKIE----- */
//$post = "id=user&pwd=123456"; //POST数据
//curl_setopt($ch1, CURLOPT_HEADER, 1); //将头文件的信息作为数据流输出
        //发送POST数据
//关闭curl
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
