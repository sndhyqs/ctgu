<?php

/**
 * @author 晏青山
 * @datetime 2014-11-26  14:12:52
 * @version 1.0
 */
class BaseMessage {

    public static $m;
    private $code;
    private $data;
    private $message = 'success';

    public function __construct($code, $message, $data = NULL) {
        $this->code = $code;
        $this->data = $data;
        if ($this->code > 0) {
            $this->message = $message;
        }
    }

    public static function instance($code, $message, $data = NULL) {
        self::$m = new BaseMessage($code, $message, $data);
        return self::$m;
    }

    public function getCode() {
        return $this->code;
    }

    public function getData() {
        return $this->data;
    }

    public function show() {
        $message['code'] = $this->code;
        $message['message'] = $this->message;
        $message['data'] = $this->data;
        echo json_encode($message);
    }

    public function __toString() {
        return "code:$this->code|data:$this->data|message:$this->message";
    }

}
