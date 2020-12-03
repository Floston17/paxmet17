<?php
require __DIR__.'/autoload.php';


$data2 = \App\Models\Article::FindLastCount(2);

//var_dump($data2);

include __DIR__ . '/App/Templates/articles.php';
