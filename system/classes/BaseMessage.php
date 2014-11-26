<?php

/**
 * @author 晏青山
 * @datetime 2014-11-26  14:12:52
 * @version 1.0
 */
class BaseMessage {

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

    public function getCode() {
        return $this->code;
    }

    public function getData() {
        return $this->data;
    }

    public function __toString() {
        return "code:$this->code|data:$this->data|message:$this->message";
    }

}
