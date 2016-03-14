<?php
    require_once('connect.php');

    $key = $_GET['key'];
    $sql = "select * from article where title like '$key%' order by dateline desc";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)) {
        while($row = mysql_fetch_assoc($query)) {
        $data[] = $row;
    }
}

?>


<!DOCTYPE html>
<head>

</head>
<body>
<div>
    <?php require_once('nav.php')?>
    <?php
    if(empty($data)) {
        echo "nothing";
    } else {
        foreach ($data as $value) {
            ?>
            <div class="header"><?php echo $value['title']?>author: <?php echo $value['author']?></div>
            <div class="content"><?php echo $value['description']?></div>
            <div class="footer"><a href="article.show.php?id=<?php echo $value['id']?>">original text</a></div>
            <?php
        }
    }
    ?>

</div>
</body>

</html>