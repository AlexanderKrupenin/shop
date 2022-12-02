<?php

    //--------------------------Настройки подключения к БД-----------------------
    include "db.php";
    //----------------------------------------------------------------------------------------
    $user_id = 1;
    //include "count_id.php";

//создание временной таблиццы, где только устройства определененого человека


    $link4 = "favicon.php";

$id = 1;

  ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Магазин</title>
      <link rel="apple-touch-icon" sizes = "180x180" href = "apple-touch-icon.png">
      <link rel="icon" type = "image/png" sizes="32x32" href = "img/favicon-32x32.png">
      <link rel="icon" type = "image/png" sizes="16x16" href = "img/favicon-32x32.png">
      <link rel="manifest" href = "site.webmanifest">
    <link rel="stylesheet" href = "style.css">
  </head>
  <body>
  
  <header>
    
      <div class = "top_line head_title"  style= "position: fixed; left: 0%;top:0%; width: 100%; height: 20%;"> </div>
      <h1 class = "text_up head_title" style= "position: fixed; left: 25%;top:0%; width: 45%;height: 5%;">Магазин электроники Техно</h1>
      
      <a href="<?php	// начинаем первый PHP скрипт

      $name='Nature Life'; // переменная с текстом ссылки
      $link='main.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      echo ' class="button_main head_title"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки      
      ?>><button class = "button_main head_title" style = "position: fixed; left: 50%;top:12%; width: 15%;height: 5%;">Тест</button></a>

      <a href="<?php	// начинаем первый PHP скрипт

      $name='Nature Life'; // переменная с текстом ссылки
      $link='device_status.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      echo ' class="button_main head_title"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>><button class = "button_main head_title" style = "position: fixed; left: 10%;top:12%; width: 15%;height: 5%;">Отзывы</button></a>

      <a href="<?php	// начинаем первый PHP скрипт

      $name='Nature Life'; // переменная с текстом ссылки
      $link='registr.php';	// переменная с адресом ссылки
      $current_page=true;	// переменная, определяющая активность пункта меню

      echo $link;	// выводим адрес ссылки
      ?>"><?php	// начинаем второй PHP скрипт

      if( $current_page )	// если пункт меню активный
      echo ' class="button_main head_title"'; // выводим соответствующий класс 
      echo $name;	// выводим текст ссылки
      ?>><button class = "button_main head_title" style = "position: fixed; left: 30%;top:12%; width: 15%;height: 5%;">Регистрация</button></a>

 


    </header>
    <main> 
        
      <div class = "text_between_small" style = "left: 23%;top:25%; width: 50%; height: 60%;"> 
       Магазин электроники Техно - это то место где вы можете приобрести смартфоны, ноутбуки и комьютеры!
       <?php 
   echo'
   <!DOCTYPE HTML>
  <html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>MyApp</title>
  <script src="/UpdateScript.js"> </script>
  </head>
  <body>';

      include "sql.php";
      echo'
  <form method=POST>
  <button  style = "position: fixed; left: 70%;top:12%; width: 15%;height: 5%;" class="button_main head_title" formmethod=POST name=button_pr'.$id.' value=1>Магазин</button>
  </form><br>';
       ?>
    </div>    
</form>
    </main>
    <footer>
      <div class = "top_line" style = "position: absolute; left: 0%;top:120%; width: 100%; height: 20%;"> </div>
      <div class = "text" style = "position: absolute; left: 30%;top:125%; width: 40%; height: 10%;">Магазин электроники Техно +7-353-943-62-85</div>
      <img src ="img/logo.png"  style="position: absolute; width: 10%; height: 15%;left: 70%; top:120%;"></img>
    </footer>
  </body>

  </html>