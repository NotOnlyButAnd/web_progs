<?php
    // Открытие доступа к сессионным переменным
    session_start();
    $answer9 = $_POST['answer9'];
    
    // $_SESSION - массив сессионных переменных
    $_SESSION['Ответ 9'] = $answer9;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Результаты</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>Тест по дисциплине: "Программирование в компьютерных сетях"</header>
   <h3>А вот и результаты:</h3>
   
   <?php
    // Чтение JSON файла
    $json_str = file_get_contents("results.json");
    // Преобразование строки JSON в массив
    $answers = json_decode($json_str, true);
    
    // Проверка ответов пользователя
        foreach ($_SESSION as $key => $value) {
            echo "$key: $value";
            if ($_SESSION[$key] == $answers[$key])
                print "<p class='valid'> Верно</p><br>";
            else
                print "<p class='invalid'> Неверно</p><br>";
    }      
    session_destroy();
    ?>

    <a href="index.html">пройти еще раз</a>

</body>
</html>


<!--
Укажите тег позволяющий определить поле для ввода пароля.
    1.<hide>
    2.<password>
    3.<pass>
    4.<input type='password'/> (+)

Программа для просмотра гипертекстовых страниц называется:
    1.Сервер
    2.Протокол
    3.HTML
    4.Браузер (+)
    
Что такое сессия?
    1.механизм походов к психологу
    2.механизм находждения в игре
    3.механизм идентификации браузера (+)
    4.механизм сдачи экзаменов
 
Cookies это:
    1.расширение протокола HTTP (+)
    2.расширение протокола FTP
    3.расширение протокола TELNET

Как получить данные POST-запроса в PHP?
    1.Через функцию getPostData()
    2.Через константу POST
    3.Через переменную $_POST (+)

Какой механизм позволяет серверу хранить информацию на компьютере клиента и извлекать её оттуда?
    1.Механизм Cookie (+)
    2.Механизм World Wide Web
    3.Механизм Session
    4.Механизм Frame
    
Что такое AJAX?
    1.Java-Script-библиотека
    2.Сетевой протокол передачи данных на сервер
    3.Технология обмена данными с сервером  без перезагрузки страницы (+)
    4.Текстовый формат обмена данными

Что такое протокол HTTP?
    1.Базовый протокол сети гипертекстовых ресурсов (+)
    2.Протокол режима командной строки
    3.Первый обозреватель с графическим интерфейсом
    4.Протокол коммутации пакетов, предполагающий разбиение запросов данных на небольшие фрагменты

Что такое JQUERY?
    1.CSS-библиотека
    2.Java-Script-библиотека (+)
    3.Java-Script фреймворк
    4.CSS-фреймворк

-->