<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Main {

    public function action_index() {
        $countent = View::factory('login');
        $this->countent = $countent;
    }

    public function action_del() {
        $data = file_get_contents('newEmptyPHP.php');
        echo strlen($data);
    }

}

// End Welcome
