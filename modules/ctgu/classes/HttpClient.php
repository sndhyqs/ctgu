<?php

/**
 * @filename HttpClient.php 
 * @author 晏青山
 * @datetime 2014-11-21  15:02:18
 * @version 1.0
 * 访问远程网站 可以使用cookie;
 * cookie是由远程网站产生，所以在开始访问网站前先要获取cookie然后再进行访问;
 * 
 * 
 */
class HttpClient {

    private $cookie;
    private $handle;

    public function __construct($cookie) {
        $this->cookie = $cookie;
        $this->handle = curl_init();
        $this->init();
    }

    /**
     * 初始化
     */
    private function init() {
        curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, 1); //返回获取的输出文本流
        if ($this->cookie != NULL && $this->cookie != "") {
            curl_setopt($this->handle, CURLOPT_COOKIE, $this->cookie);
        }
    }

    /**
     * post
     * @param type $url
     * @param type $dataArray
     * @return type countent
     */
    public function post($url, $dataArray) {
        $data = http_build_query($dataArray, '&');
        curl_setopt($this->handle, CURLOPT_URL, $url);
        curl_setopt($this->handle, CURLOPT_POSTFIELDS, $data);
        return $this->execue();
    }

    /**
     * 
     * @param type $url
     * @return type countent
     */
    public function get($url) {
        curl_setopt($this->handle, CURLOPT_URL, $url);
        return $this->execue();
    }

    /**
     * 执行
     * @return type
     */
    private function execue() {
        $content = curl_exec($this->handle);
        return $content;
    }

}
