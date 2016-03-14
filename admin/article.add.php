<!DOCTYPE html>
<head>

</head>
<body>
    <?php require_once('nav.php') ?>
<form method="post" action="article.add.handle.php">
    <table>
        <tr><td>add</td></tr>
        <tr>
            <td>title</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td>author</td>
            <td><input type="text" name="author"/></td>
        </tr>
        <tr>
            <td>description</td>
            <td><textarea name="description"></textarea></td>
        </tr>
        <tr>
            <td>content</td>
            <td><textarea name="content"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="button" value="submit"/></td>
        </tr>
    </table>

</form>
</body>
</html>