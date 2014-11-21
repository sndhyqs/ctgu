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
        echo $ctgu->get_cookie() . "<br/>";
        echo $ctgu->get_check_code() . "<br/>";
        echo $ctgu->get_sccuss_tag();

        if ($ctgu->get_sccuss_tag()) {
            $http = new HttpClient($ctgu->get_check_code());
           echo  $http->post("http://210.42.38.26:81/jwc_glxt/");
            echo $http->get("http://210.42.38.26:81/jwc_glxt/?__VIEWSTATE=%2FwEPDwUKMTQ4NjM5NDA3OWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFCGJ0bkxvZ2luxH3FxhKrV5DSLNmTU4lmM%2B8noJI%3D&__EVENTVALIDATION=%2FwEWBQK0rZn5BQKl1bKzCQKC3IeGDAK1qbSRCwLO44u1DRoeeCML9VwaJp827ywoonHLTN5B&txtUserName=2011112243&txtPassword=138855&CheckCode=q&btnLogin.x=44&btnLogin.y=16");
            $http->post("http://210.42.38.26:81/jwc_glxt/Login.aspx?xttc=1");
        }
    }

    public function action_del() {
        
    }

}

// End Welcome
