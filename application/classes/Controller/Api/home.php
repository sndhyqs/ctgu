<?php

/**
 * @filename home.php 
 * @author 晏青山
 * @datetime 2014-11-20  17:37:18
 * @version 1.0
 */
defined('SYSPATH') or die('No direct script access.');

class Controller_Api_Home extends Controller {

    public function action_index() {
        $this->response->body('hello,Api, world!');
    }

    public function action_del() {
        
    }

}

// End Welcome
