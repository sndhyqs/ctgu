<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#"><?php echo $title ?></a>
        <?php
        $nav_arr = array();
        $current_action = Request::$current->action();
        $nav_arr[$current_action] = 'class="active"';
        ?>
        <ul class="nav">
            <li <?php echo Arr::get($nav_arr, 'score', '');?>><a href="/ctgu">成绩</a></li>
            <li <?php echo Arr::get($nav_arr, 'course', '');?>><a href="/ctgu/ctgu/course">课表</a></li>
            <li><a href="ctgu/ctgu/out">退出</a></li>
        </ul>
    </div>
</div>