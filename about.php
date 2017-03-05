<?php
	
	$myName 	= 'Татьяна';
	$myAge 		= 28;
	$myEmail 	= 'girl-without@yandex.ru';
	$myTowm 	= 'Раменское';
	$myStory 	= 'Хочу стать fullstack-разработчиком'.

?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title>Татьяна - ученик</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h1>Страница пользователя Татьяна</h1>
        <dl>
            <dt>Имя</dt>
            <dd><?php echo '$myName'; ?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?php echo '$myAge'; ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="mailto:<?php echo '$myEmail'; ?>"><?php echo '$myEmail'; ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?php echo '$myTown'; ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?php echo '$myStory'; ?></dd>
        </dl>
    </body>
</html>
