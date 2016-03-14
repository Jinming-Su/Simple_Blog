<?php
    require_once('connect.php');
    $id = intval($_GET['id']);  //防止非法字符的sql注入，intval如果遇到非法字符，直接为0
    $sql = "select * from article where id = $id";
    //echo $sql;
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)) {
        $row = mysql_fetch_assoc($query);
    } else {
        echo "the article does not exist";
    }

    //print_r($row);
?>
<!DOCTYPE html>
<head>

</head>
<body>
    <?php require_once('nav.php')?>
    <div class="header">
        <h2><?php echo $row['title']?></h2>
        <?php echo $row['author'] ?>
    </div>
    <hr/>
    <div class="content"><?php echo $row['content']?></div>
</body>

</html>
