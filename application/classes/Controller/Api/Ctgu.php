<?php

/**
 * @author 晏青山
 * @datetime 2014-12-1  14:02:07
 * @version 1.0
 */
class Controller_Api_Ctgu extends Controller_Ctgu_CtguMain {

    public function action_score() {
        if ($this->logined) {
            $score_array = Cache::instance()->get($this->username . "score");
            if ($score_array == NULL) {
                $score_array = $this->ctgu->get_score();
            }
            Cache::instance()->set($this->username . "score", $score_array, 1200);
            //设置导航的年份列表
            $year_array = $this->ctgu->get_year_array($score_array);
            BaseMessage::instance(0, "success", $score_array)->show();
        }
    }

    public function action_course() {
        if ($this->logined) {
            $course_array = Cache::instance()->get($this->username . "course");
            if ($course_array == NULL) {
                $course_array = $this->ctgu->get_course();
            }
            Cache::instance()->set($this->username . "course", $course_array, 1200);
            BaseMessage::instance(0, "success", $course_array)->show();
        }
    }

    public function action_out() {
        if ($this->logined) {
            $this->ctgu->login_out();
            Cache::instance()->delete($this->username . "course");
        }
    }

    public function ctgu_main_before() {
        try {
            $this->template = "nu";
            parent::ctgu_main_before();
        } catch (Exception $exc) {
            BaseMessage::instance($exc->getCode(), $exc->getMessage(), null)->show();
        }
    }

    protected function check_user() {
        $username = $this->request->query('username');
        $password = $this->request->query('password');
        if ($username != NULL && $password != NULL) {
            $this->username = $username;
            $this->password = $password;
            return FALSE; //因为没有登录所以返回false
        } else {
            throw new Exception("学号或者密码为空", 4, NULL);
        }
    }

}
