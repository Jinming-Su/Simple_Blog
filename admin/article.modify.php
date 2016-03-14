<?php
    require_once('../connect.php');

    $id = $_GET['id'];
    $querysql = mysql_query("select * from article where id = $id");
    $data = mysql_fetch_assoc($querysql);
?>

<!DOCTYPE html>
<head>

</head>
<body>
    <?php require_once('nav.php') ?>
<form method="post" action="article.modify.handle.php">
    <input type="hidden" name="id" value="<?php echo $data['id']?>">
    <table>
        <tr><td>modify</td></tr>
        <tr>
            <td>title</td>
            <td><input type="text" name="title" value="<?php echo $data['title']?>"/></td>
        </tr>
        <tr>
            <td>author</td>
            <td><input type="text" name="author" value="<?php echo $data['author']?>"/></td>
        </tr>
        <tr>
            <td>description</td>
            <td><textarea name="description"><?php echo $data['description']?></textarea></td>
        </tr>
        <tr>
            <td>content</td>
            <td><textarea name="content"><?php echo $data['content']?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="button" value="submit"/></td>
        </tr>
    </table>

</form>
</body>
</html>
