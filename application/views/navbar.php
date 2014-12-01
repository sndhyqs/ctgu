<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="/"><?php echo $title ?></a>
        <?php
        $nav_arr = array();
        $current_action = Request::$current->action();
        $nav_arr[$current_action] = 'class="active"';
        ?>
        <ul class="nav">
            <li class="dropdown" ><a href="/ctgu" class="dropdown-toggle" data-toggle="dropdown">成绩<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/ctgu">ALL</a></li>
                    <?php foreach ($year_array as $value) {
                        ?>
                        <li><a href="/ctgu?year=<?php echo $value?>"><?php echo $value?></a></li>
                    <?php } ?>
                </ul></li>
            <li <?php echo Arr::get($nav_arr, 'course', ''); ?>><a href="/ctgu/ctgu/course">课表</a></li>
            <li><a href="/ctgu/ctgu/out">退出</a></li>
        </ul>
    </div>
</div>