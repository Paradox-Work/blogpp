<?php

require "models/Model.php";

class Blog extends Model {

    protected static function getTableName(): string
    {
      return "posts";
    }

    public static function find($id) {
        self::init();
    
        $sql = "SELECT * FROM " . static::getTableName() . " WHERE id = ?";
        return self::$db->query($sql, [$id])->fetch();
    }
    
    public static function create($data) {
        self::init();
    
        $table = static::getTableName();
    
        $sql = "INSERT INTO $table (content) VALUES (?)";
        self::$db->query($sql, [$data['content']]);
    }
    
    public static function save($id, $data) {
        self::init();
    
        $table = static::getTableName();
    
        $sql = "UPDATE $table SET content = ? WHERE id = ?";
        self::$db->query($sql, [$data['content'], $id]);
    }
    
    public static function delete($id) {
        self::init();
    
        $sql = "DELETE FROM " . static::getTableName() . " WHERE id = ?";
        self::$db->query($sql, [$id]);
    }
    
    
    
}