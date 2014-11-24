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
        Kohana::load('/lib/html_dom.php');
//        $ctgu = new Ctgu();
//        $ctgu->get_score();
        $data = array();
        $data_array = array();
        $score_html = file_get_contents('score.php');
        $score_html = substr_replace($score_html, "", 0, strpos($score_html, '所获学分'));
        $dom = str_get_html($score_html);
        $tr = $dom->find('tr');
        $i = 0;
        foreach ($tr as $key => $value) {
            echo  $value->children(0)->innertext();
            echo $value->children(2)->innertext();
            $data = array('year'=>$value->children(0),'name'=>$value->children(2));
            print_r($data);
            $data_array[$i] = $data;
            $i++;
            echo "<br/>";
        }
     
          json_encode($data_array);
    }

}

// End Welcome








    