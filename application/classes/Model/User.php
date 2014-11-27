<?php

/**
 * @author 晏青山
 * @datetime 2014-11-26  10:19:40
 * @version 1.0
 */
class Model_User extends ORM {

    public function save_user($username, $password) {
        $user = ORM::factory('user')->where('username', '=', $username);
        if ($user->count_all() > 0) {
            echo 'user 存在';
            $older_user = ORM::factory('user')->where('username', '=', $username)->find();
            if ($older_user->password != $password) {
                echo '密码不一样';
                $model = ORM::factory('user', $older_user->id);
                $model->set('password', $password);
                $model->save();
            }
        } else {
            $model = ORM::factory('user');
            $model->set('username', $username);
            $model->set('password', $password);
            $model->save();
        }
    }

    public function __toString() {
        return "Model_User";
    }

}
