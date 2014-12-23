<?php

/**
 * @filename ctgu.php 
 * @author 晏青山
 * @datetime 2014-11-21  9:31:14
 * @version 1.0
 */
class Ctgu extends BaseCtgu {

    public function get_score() {
        if (Kohana::$environment === Kohana::DEVELOPMENT)
            echo "score start<br/>";
        if ($this->get_login_tag()) {
            if (Kohana::$environment === Kohana::DEVELOPMENT)
                echo "scoreing <br/>";
            $score_url = $this->config->get('score');
            $score_html = $this->get($score_url);
            return Analysis_Ctgu::get_score($score_html);
        }
    }

    public function get_course() {
        if ($this->get_login_tag()) {
            $course_url = $this->config->get('course');
            $coure_html = $this->get($course_url);
            return Analysis_Ctgu::get_course($coure_html);
        }
    }

    public function get_year_array($score_array) {
        $year = array();
        foreach ($score_array as $value) {
            array_push($year, $value['year']);
        }
        $keys = array_unique($year);
        return $keys;
    }

}
