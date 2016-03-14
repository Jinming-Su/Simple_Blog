<?php
    require_once('../connect.php');

    $sql = "select * from article order by dateline desc";
    $query = mysql_query($sql);
    if($query&&mysql_num_rows($query)) {
        while($row = mysql_fetch_assoc($query)) {
            $data[] = $row;  //auto to generate the index
        }
    } else {
        $data = array();
    }
?>

<!DOCTYPE html>
<head>
    <title>manage</title>
    <style rel="stylesheet">
       .admin_manage_tbl{
           border:1px solid black;
       }
       .admin_manage_tbl td,tr{
           border:1px solid black;
       }
    </style>
</head>
<body>
    <?php require_once('nav.php') ?>
    <table class="admin_manage_tbl">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>author</td>
            <td>operation</td>
        </tr>
        <?php
            if(!empty($data)) {
                foreach ($data as $value) {
        ?>
        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['title']?></td>
            <td><?php echo $value['author']?></td>
            <td><a href="article.del.handle.php?id=<?php echo $value['id']?>">delete</a></td>
            <td><a href="article.modify.php?id=<?php echo $value['id']?>">modify</a></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>

