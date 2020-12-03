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

        return $db->query($sql, [], static::class);

    }

    public static function camelCase()
    {
        $db = new Db();
        $color = 'red';
        $car = 'audi';
        $sql = 'INSERT INTO news (title, content) VALUES (\'' . $color . '\',\'' . $car . '\')';
        return $db->execute1($sql,[]);
    }

    public static function findById($id)
    {
        $db = new Db();
        if (is_numeric($id)){
            $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=' . $id;
            $res = $db->query($sql, [], static::class);
            if (empty($res)) {
                return false;
            } else {
                return $res[0];
            }
        }
    }

    public static function FindLastCount($count)
    {
        $db = new Db();
        if (is_numeric($count)){
            $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count;
            $res = $db->query($sql, [], static::class);
            return $res;
        }
    }
}