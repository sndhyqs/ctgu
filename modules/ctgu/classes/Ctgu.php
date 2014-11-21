<?php

/**
 * @filename ctgu.php 
 * @author 晏青山
 * @datetime 2014-11-21  9:31:14
 * @version 1.0
 */
class Ctgu {

    private $check_code_len = 4;
    private static $instance = NULL;
    private $check_code_url;
    private $cookie = NULL;
    private $execute;
    private $sccuss_tag = FALSE;
    private $check_code = NULL;

    public function __construct() {
        $config = Kohana::$config->load('ctgu');
        $this->check_code_url = $config->get('check_code');
        $this->execute = Request::factory($this->check_code_url)->execute();
        $this->set_check_code();
    }

    public static function instance() {
        if (self::$instance == NULL) {
            self::$instance = new Ctgu;
        }
        return self::$instance;
    }

    public function set_check_code() {
        $code_file = $this->execute->body();
        file_put_contents(APPPATH . '/data/temp.jpg', $code_file);
        $checkCode = new Check_Code;
        $code = $checkCode->discernCheckCode();

        if (strlen($code) == $this->check_code_len) {
            $this->sccuss_tag = TRUE;
            $this->check_code = $code;
            $this->cookie = $this->execute->headers('set-cookie');
        }
    }

    public function get_check_code() {
        return $this->check_code;
    }

    public function get_cookie() {
        return $this->cookie;
    }

    public function get_sccuss_tag() {
        return $this->sccuss_tag;
    }

}
