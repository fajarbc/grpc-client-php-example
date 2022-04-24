<?php
require 'client.php';

use TodoPackage\TodoItem;

$text = isset($argv[1]) ? $argv[1] : "Task from PHP Client";

$todoItem = new TodoItem();
$todoItem->setText($text);
list($reply, $status) = $client->createTodo($todoItem)->wait();
if ($status->code !== Grpc\STATUS_OK) {
    echo "Call did not complete successfully. Status object:\n";
    var_dump($status);
    exit(1);
}
echo $reply->getText();
?>