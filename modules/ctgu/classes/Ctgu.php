<?php

/**
 * @filename ctgu.php 
 * @author 晏青山
 * @datetime 2014-11-21  9:31:14
 * @version 1.0
 */
class Ctgu extends BaseCtgu {

    public function get_score() {
        Kohana::load('/lib/html_dom.php');
        if ($this->get_login_tag()) {
            $score_url = $this->config->get('score');
            echo $score_html = $this->get($score_url);
            $score_html = substr_replace($score_html, "", 0, strpos($score_html, 'GridViewStyle'));
            $dom = str_get_html($score_html);
        }
    }

    public function get_course() {
        if ($this->get_login_tag()) {
            $course_url = $this->config->get('course');
            echo $coure_html = $this->get($course_url);
            ;
        }
    }

}
