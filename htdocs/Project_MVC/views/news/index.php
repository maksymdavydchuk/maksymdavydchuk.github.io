<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php foreach ($newsList as $newsItem):?>
    <h2><?php echo $newsItem['title'];?></h2>
    <p><?php echo $newsItem['date'];?></p>
    <p><?php echo $newsItem['content'];?></p>
<?php endforeach;?>
</body>
</html>