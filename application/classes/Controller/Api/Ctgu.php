<?php

/**
 * @author 晏青山
 * @datetime 2014-11-25  16:28:16
 * @version 1.0
 */
class Controller_Api_Ctgu extends Controller_Api_CtguMain {

    public function action_index() {
        $this->title = '成绩表';
        $this->countent = View::factory('score_list');
        if ($this->ctgu->get_login_tag()) {
            $score_array = $this->ctgu->get_score();
            $this->countent->score_array = $score_array;
        } else {
            $this->countent->score_array = array();
        }
    }

    public function action_course() {
        $this->title = '课表';
        $this->countent = View::factory('score_list');
        if ($this->ctgu->get_login_tag()) {
            $course_array = $this->ctgu->get_course();
            $this->countent->course_array = $course_array;
            print_r($course_array);
        }
    }

    public function action_list() {
        ORM::factory('user')->set('username', '2011112243')->set('password', '138855')->save();
    }

    public function action_Out() {
        if ($this->ctgu->get_login_tag()) {
            $this->ctgu->login_out();
        }
    }

}
