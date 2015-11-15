<!doctype html>
<html>
<head>
	<title>Мой сайт</title>
</head>

<body>

<a href="add.php">Добавить новость</a>

<?php // вывод записей с БД

    include_once("db.php");
    
    $author = "Dima Doronin";
    $s_author = "Vasya Pupkin";
    $limit = 4;
    
    $result = mysql_query(" SELECT title,text,date,time,author 
                            FROM news
                            ORDER BY id DESC 
                            LIMIT $limit
                        ");
    mysql_close();
    
    while($row = mysql_fetch_assoc($result)) //вывод записей таблицы бд на страницу
    {?>
    
    <h1><?php echo $row['title']?></h1>
    <p><?php echo $row['text']?></p>
    <p>Дата публикации: <?php echo $row['date']?> / <?php echo            $row['time']?></p>
    <p> Автор новости: <?php echo $row['author']?></p>
    <hr>
    <?php }?>

    
    




</body>
</html>