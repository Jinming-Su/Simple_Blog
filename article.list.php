<?php
    require_once('connect.php');

    $sql = "select * from article order by dateline desc";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)) {
        while($row = mysql_fetch_assoc($query)) {
            $data[] = $row;
        }
    }
?>

<!DOCTYPE html>
<head>
    <title>personal blog</title>
    <style rel="stylesheet">

    </style>
</head>
<body>
    <?php require_once('nav.php')?>
    <div>
        <?php
            if(empty($data)) {
                echo "nothing";
            } else {
                foreach ($data as $value) {
            ?>
                    <hr/>
                    <div class="header">
                        ID: <?php echo $value['id']?><br/>
                        TITLE: <?php echo $value['title']?><br/>
                        AUTHOR: <?php echo $value['author']?></br>
                    </div>
                    <div class="content">
                        DES: <?php echo $value['description']?>
                    </div>
                    <div class="footer">
                        <a href="article.show.php?id=<?php echo $value['id']?>">Source</a>
                    </div>
        <?php
                }
            }
        ?>
    </div>
</body>

</html>