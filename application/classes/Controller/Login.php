<?php

/**
 * @author 晏青山
 * @datetime 2014-12-15  14:25:08
 */
class Controller_Login extends Controller_Main {

    public function action_index() {
        $countent = View::factory('login');
        $this->countent = $countent;
    }

}
