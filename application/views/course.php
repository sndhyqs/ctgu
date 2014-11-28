<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>节次</th>
            <th>周一</th>
            <th>周二</th>
            <th>周三</th>
            <th>周四</th>
            <th>周五</th>
            <th>周六</th>
            <th>周日</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($course_array as $value) {
            ?><tr>
                <td><?php echo $value['t0']; ?></td>
                <td><?php echo $value['t1'] ?></td>
                <td><?php echo $value['t2'] ?></td>
                <td><?php echo $value['t3'] ?></td>
                <td ><?php echo $value['t4'] ?></td>
                <td><?php echo $value['t5'] ?></td>
                <td><?php echo $value['t6'] ?></td>
                <td ><?php echo $value['t7'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
