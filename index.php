<?php
require __DIR__.'/autoload.php';
?>

<?php

$data = \App\Models\Article::findAll();

//var_dump($data);

$id = $_GET['id'];

if (!is_numeric($id) || empty($id)){
    echo 'Дайте мне номер статьи';
    die;
} else {
    $data1 = \App\Models\Article::findById($id);
    if ($data1==false){
        echo 'Под таким номером нет статьи';
        die;
    }
}


//var_dump($data1);

$data2 = \App\Models\Article::FindLastCount(2);

//var_dump($data2);

//$data2 = \App\Models\Article::camelCase();

//var_dump($data2);

include __DIR__ . '/App/Templates/article.php';
