<?php

defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @filename url.php 
 * @author 晏青山
 * @datetime 2014-11-21  9:24:18
 * @version 1.0
 */
return array
    (
    'base' => 'http://210.42.38.26:81/jwc_glxt/',
    'check_code' => 'http://210.42.38.26:81/jwc_glxt/ValidateCode.aspx',
    'temp_path' => APPPATH . '/data/temp.jpg',
    'login_out' => 'http://210.42.38.26:81/jwc_glxt/Login.aspx?xttc=1',
    'score' => "http://210.42.38.26:81/jwc_glxt/Student_Score/Score_Query.aspx",
    'course' => 'http://210.42.38.26:81/jwc_glxt/Course_Choice/Course_Schedule.aspx',
    'score_model' => array(
        'year' => 0,
        'term' => 1,
        'subject' => 2,
        'credit' => 3,
        ' Ctype' => 4,
        'score' => 5,
        'credited' => 6,
    )
);
