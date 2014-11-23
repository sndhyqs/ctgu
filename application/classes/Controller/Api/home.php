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
        $ctgu = Ctgu::instance();
        $cookie =$ctgu->get_cookie();
        echo $ctgu->get_check_code() . "<br/>";
        echo $ctgu->get_sccuss_tag();

        if ($ctgu->get_sccuss_tag()) {
            $http = new HttpClient($ctgu->get_check_code(),$cookie);
//             $http->post("http://210.42.38.26:81/jwc_glxt/");
           echo $http->get("http://210.42.38.26:81/jwc_glxt/");
           $http->post("http://210.42.38.26:81/jwc_glxt/Login.aspx?xttc=1");
        }
    }

    public function action_del() {
        
    }

}

// End Welcome
