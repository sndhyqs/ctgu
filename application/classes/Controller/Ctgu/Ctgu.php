<?php

/**
 * @author 晏青山
 * @datetime 2014-11-25  16:28:16
 * @version 1.0
 */
class Controller_Ctgu_Ctgu extends Controller_Ctgu_CtguMain {

    public function action_index() {
        $this->title = '成绩表';
        //获取查询的年份
        $year = $this->request->query('year');
        $this->countent = View::factory('score_list');
        if ($this->logined) {
            $score_array = Cache::instance()->get($this->username . "score");
            if ($score_array == NULL) {
                $score_array = $this->ctgu->get_score();
            }
            Cache::instance()->set($this->username . "score", $score_array, 1200);
            //设置导航的年份列表
            $year_array = $this->ctgu->get_year_array($score_array);
            $this->navbar->year_array = $year_array;
            if ($year != NULL) {
                $year_score_array = array();
                foreach ($score_array as $value) {
                    if ($year == $value['year'])
                        array_push($year_score_array, $value);
                }
                $score_array = $year_score_array;
            }
            $this->countent->score_array = $score_array;
        } else {
            $this->countent->score_array = array();
        }
    }

    public function action_course() {
        $this->title = '课表';
        $this->countent = View::factory('course');
        if ($this->logined) {
            $course_array = Cache::instance()->get($this->username . "course");
            if ($course_array == NULL) {
                $course_array = $this->ctgu->get_course();
            }
             Cache::instance()->set($this->username . "course", $course_array, 1200);
            $this->countent->course_array = $course_array;
        }
    }

    public function action_list() {
        ORM::factory('user')->set('username', '2011112243')->set('password', '138855')->save();
    }

    public function action_Out() {
        if ($this->ctgu->get_login_tag()) {
            $this->ctgu->login_out();
            Cache::instance()->delete($this->username . "course");
            Session::instance()->destroy();
            $this->redirect('/login');
        }
    }

}
