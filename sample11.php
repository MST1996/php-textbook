<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $age = rand(0, 80);
    if(/*empty($_REQUEST['my_name'])*/$age>= 20){
        print('あなたはおとなです');
    }else{
        print('あなたはこどもです');
    }
    ?>
</body>
</html>