<?php

$connection = mysql_connect("localhost", "lis5662", "1234"); // данные бд
    $db = mysql_select_db("my db"); //выбор таблицы
    mysql_query(" SET NAMES 'utf8' "); //кодировка
    
    if(!$connection || !$db) //условие к бд
    {
        exit(mysql_error()); // ошибки бд в случае не выполнения условия
    }

?>