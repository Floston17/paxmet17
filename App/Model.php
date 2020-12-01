<?php


namespace App;


abstract class Model
{
    public const TABLE = '';
    public $id;

    abstract public function getModelName();

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql,
            [],
            static::class
        );

    }

    public static function putIN()
    {
        $db = new Db();
        $color = 'red';
        $car = 'audi';
        $sql = 'INSERT INTO news (title, content) VALUES (' . $color . ',' . $car . ')';

        return $db->execute1(
            $sql,
            []
        );

    }
}