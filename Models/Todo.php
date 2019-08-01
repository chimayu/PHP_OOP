<?php

require_once('config/dbconnect.php');

class Todo
{
    // プロパティ
    private $table = 'tasks';
    private $db_manager;

    // インスタンス化したときに呼ばれるメソッド
    public function __construct()
    {
        // db_managerプロパティは
        // DbManagerクラスのインスタンス
        $this->db_manager = new DbManager();
        $this->db_manager->connect();
    }

    public function create($name)
    {
        // DBに保存
        // このクラスのインスタンスの
        // db_managerプロパティの（DbManagerクラスのインスタンス）
        // dbhプロパティの（PDOのインスタンス）
        // prepareメソッドを実行
        $stmt = $this->db_manager->dbh->prepare('INSERT INTO ' . $this->table . ' (name) VALUES (?)');
        $stmt->execute([$name]);
    }
}