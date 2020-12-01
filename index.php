<?php
require __DIR__.'/autoload.php'
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson1</title>
</head>
<body>
<!--
 Архитектура - это базовая организация системы, воплощенная в её компонентах, их отношениях
 между собой и с окружением, а также принципы, определяющие проектирование и развитие системы.
 - Компоненты кода (на какие части разбить)
 - Структура кода (где что будет лежать)
 - Отношения между компонентами
    Главный паттерн - MVC (шаблон типового решения стандартной задачи)
        Модель(код работающий с данными)
    Ее задача - дать нужные данные тем компонентам, которые их запрашивают
    Модель и только модель знает, где данные находятся, как они организованы
    Модель и только модель умеет обновлять, вставлять и удалять данные
    CRUD - create read update delete - то что делает Модель

 ORM - Object Relational Mapping - принцип отображения объектов реального мира
 (и их связец) на объекты вашего языка программирования.

 Статический метод - это метод который не требует создания объекта.
 внутри него нельзя испольсовать $this-> ... так как объекта никакого нет.
 $data = \App\Models\Article::findAll(); - обращение к статическому методу.

    Статическое свойство тоже может быть. но его можно переопределить
    Свойство класса может быть и константа. В каждом классе есть одна константа - class,
    которая содержит полное имя класса
    \App\Models\Article - чтобы не писать это, пишут Article::class\
    Вместо того чтобы писать в методе класса каждый раз Article::..., и при изменении названия
    искать и править везде его название, можно писать self::TABLE и т.д. (находясь в самом классе)

    Астрактные классы - класс который есть, но нельзя создать его экземпляр.
    Прописывать перед - abstract class name - чтобы не давало создать экземпляр этого класса.
    Астрактный метод - он обязан быть использован в наследниках, или выдаст ошибку.
    он написан в абстактном классе и только его заготовка. он обязывает реализовывать этот метод в наследниках.
    В абстрактном методе не использовать self.
    вариант 1 - $class = get_called_class();
    вариант 2 - static::TABLE; static::class

    3 этапа выполнения - парсинг(строится дерево исполнеия кода)
                       - компиляция
                       - исполнения
    self - это ранняя, а static - это позднее обращение. Поэтому self в абстрактном классе не работает.

-->
<?php

$data = \App\Models\Article::findAll();

var_dump($data);


$data2 = \App\Models\Article::putIN();

var_dump($data2);

?>
</body>
</html>