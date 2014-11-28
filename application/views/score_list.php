<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>学年</th>
            <th>学期</th>
            <th>科目</th>
            <th>学分</th>
            <th>成绩</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($score_array as $value) {
            ?><tr <?php
            switch ($value['score']) {
                case $value['score'] < 60 && $value['score'] > 0:
                    echo 'class="error"';
                    break;
            }
            ?>>
                <td><?php echo $value['year']; ?></td>
                <td><?php echo $value['term'] ?></td>
                <td><?php echo $value['subject'] ?></td>
                <td><?php echo $value['credit'] ?></td>
                <td ><?php echo $value['score'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
