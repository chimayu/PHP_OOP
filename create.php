<?php

require_once('Models/Todo.php');

// ADDボタンを押したら、
// ユーザーが入力した内容をDBに保存して
// 一覧画面に戻る

// ユーザーが入力した内容を取得
// $taskという変数にユーザーが入力した内容を代入
$task = $_POST['task'];

// echo '<pre>';
// var_dump($task);
// exit;

// DBに保存
$todo = new Todo();

// Todoクラスのインスタンス
// createメソッドを実行
$todo->create($task);

// echo '<pre>';
// var_dump($todo);
// exit;

// 一覧画面に戻る
header('location: index.php');