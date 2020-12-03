<?php


namespace App\Models;


use App\Model;

class Article extends Model
{
//    public static $table = 'news';
    public const TABLE = 'news';


    public $title;
    public $content;


    public function getModelName()
    {
        // TODO: Implement getModelName() method.
    }
}