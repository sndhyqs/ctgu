<?php

class Kohana extends Kohana_Core {

    public static function get_base_uri() {
        return Kohana::$base_url . '' . Kohana::$index_file . '/';
    }

}
