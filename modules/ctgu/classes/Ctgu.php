<?php

/**
 * @filename ctgu.php 
 * @author 晏青山
 * @datetime 2014-11-21  9:31:14
 * @version 1.0
 */
class Ctgu extends BaseCtgu {

    public function get_score() {
        echo "score start<br/>";
        if ($this->get_login_tag()) {
            echo "scoreing <br/>";
            $score_url = $this->config->get('score');
            $score_html = $this->get($score_url);

            return Analysis_Main::get_score($score_html);
        }
    }

    public function get_course() {
        if ($this->get_login_tag()) {
            $course_url = $this->config->get('course');
            $coure_html = $this->get($course_url);
            return Analysis_Main::get_score($coure_html);
        }
    }

}
