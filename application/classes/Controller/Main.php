<?php

/**
 * @filename Template.php 
 * @author 晏青山
 * @datetime 2014-11-25  9:56:10
 * @version 1.0
 */
abstract class Controller_Main extends Controller_Template {

    protected $countent = NULL;
    protected $title = NULL;

    public function before() {
        $this->title = '学习教程';
        parent::before();
    }

    public function after() {
        $this->template->bind('title', $this->title);
        $this->template->bind('countent', $this->countent);
        parent::after();
    }

    private function bind() {
        
    }

}
