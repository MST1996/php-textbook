<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        print('PHP');
        ?>
    </p>
    <a href="<?php print('http://h2o-space.com')?>">タグ属性をPHPに埋め込みました</a>
    <?php
    echo('<p>PHPは文字の中に埋め込んで記述することができます。</p>');
    ?>
    <?php
    print('<p>開業するときは、<br>brタグがつかえるよ</p>');
    ?>
    <?php
    echo(date('s'));
    ?>
</body>
</html>