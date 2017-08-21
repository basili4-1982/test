<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 20.08.17
 * Time: 21:17
 */

require realpath( __DIR__."/../..")."/bootstrap.php";

$task = new \models\Tasks();

for ($i = 0; $i < 100; $i++) {
    
    echo "$i".PHP_EOL;
    
    $item = ['username' => 'username' . $i, 'email' => 'email' . $i . '@domen.ru', 'content' => 'Текст задачи №' . $i, 'status' => 0];
    $task->insert($item);
}


