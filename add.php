<!doctype html>
<html>
<head>
	<title>Добавление новости</title>
</head>

<body>
<form method="post" action="add.php">

Название новости<br>
<input type="text" name="title"><br>

Текст новости<br>
<textarea cols="40" rows="10" name="text"></textarea><br>

Автор новости<br>
<input type="text" name="author"><br>
<input type="hidden" name="date" value="<?php echo date('Y-m-d')?>"><br>
<input type="hidden" name="time" value="<?php echo date('H:i:s')?>"><br>

<input type="submit" name="add" value="Добавить">

</form>

<?php
    
 include_once("db.php");
       
if(isset($_POST['add']))       
 {      
 $title = strip_tags(trim($_POST['title']));
 $text = strip_tags(trim($_POST['text']));
 $author = strip_tags(trim($_POST['author']));
 $date = $_POST['date'];
 $time = $_POST['time'];
       
 mysql_query(" 
                    INSERT INTO news(title, text, date, time, author)                     VALUES ('$title', '$text', '$date', '$time', '$author') "); //запрос 
       
 mysql_close();
     
echo "Новость успешно добавлена";     
 }
       
       

    
?>



</body>
</html>