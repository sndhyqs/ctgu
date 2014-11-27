<?php

/**
 * @filename Analysis_Main.php 
 * @author 晏青山
 * @datetime 2014-11-25  9:16:49
 * @version 1.0
 * 
 * 
 * 解析html类
 */
class Analysis_Main {

    public static $logined_html_length = 161;
    public static $config;
    public static $error;

    public static function init() {
        self::$config = Kohana::$config->load('ctgu'); //引入解析模板，在配置文件中
        self::$error = Kohana::$config->load('error');
        include_once '/lib/html_dom.php'; //引入解析类
    }

    public static function get_score($html) {
        self::init();
        $data = array();
        $data_array = array();
        $score_model = self::$config->get('score_model');
        $score_html = substr_replace($html, "", 0, strpos($html, '所获学分'));
        try {
            $dom = str_get_html($score_html);
            $tr = $dom->find('tr');
            foreach ($tr as $key => $value) {
                foreach ($score_model as $key => $v) {
                    $temp = $value->children($v)->innertext();
                    $data[$key] = $temp;
                }
                array_push($data_array, $data);
            }
            $dom->clear();
            unset($dom);
        } catch (Exception $ex) {
            return new BaseMessage(3, self::$error->get(3));
        }
        return $data_array;
    }

    public static function get_course($html) {
        self::init();
        $data = array();
        $data_array = array();
        $course_html = substr_replace($html, "", 0, strpos($html, '星期日'));
        try {
            $dom = str_get_html($course_html);
            $tr = $dom->find('tr');
            $i = 0;
            foreach ($tr as $value) {
                for ($index = 0; $index < 6; $index++) {
                    $t = $value->children($index)->innertext();
                    $data['t' . $index] = $t;
                }
                $data_array[$i] = $data;
                $i++;
            }
            $dom->clear();
            unset($dom);
        } catch (Exception $ex) {
            return new BaseMessage(3, self::$error->get(3));
        }
        return $data_array;
    }

    /**
     * 检测用户是否登入
     */
    public static function get_login_message($html) {
        self::init();
        if (strlen($html) == self::$logined_html_length) {
            return TRUE;
        } else {
            try {
                $dom = str_get_html($html);
                $message = $dom->find('span[id=lblMsg]');
                foreach ($message as $value) {
                    $child = $value;
                }
                $font = $child->find("font");
                foreach ($font as $value) {
                    $child = $value;
                }
                $data = $child->innertext();
                $dom->clear();
                unset($dom);
                if ($data != NULL && $data != "") {
                    return new BaseMessage('4', $data);
                }
            } catch (Exception $exc) {
                return new BaseMessage(3, self::$error->get('3'));
            }
        }
        return FALSE;
    }

}
