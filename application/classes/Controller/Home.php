<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Main {

    public function before() {
        $this->navbar_show = FALSE;
        parent::before();
    }

    public function action_index() {
        $countent = View::factory('index');
        $this->countent = $countent;
    }

    public function action_del() {
       
    }

}

// End Welcome
