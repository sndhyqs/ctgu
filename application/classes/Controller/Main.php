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
    protected $navbar = NULL;
    protected $navbar_show = TRUE;

    public function before() {
        if ($this->navbar_show) {
            $this->navbar = View::factory('navbar');
        }
        $this->title = '学习教程';
        $this->navbar->year_array = array();
        parent::before();
    }

    public function after() {

        $this->template->bind('title', $this->title);
        $this->template->bind('countent', $this->countent);
        $this->template->bind('navbar', $this->navbar);
        $this->navbar->title = $this->title;

        parent::after();
    }

    private function bind() {
        
    }

}
