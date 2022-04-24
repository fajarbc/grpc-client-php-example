<?php
require_once 'client.php';

use TodoPackage\NoParam;
$noParam = new NoParam();
list($reply, $status) = $client->readTodos($noParam)->wait();
if ($status->code !== Grpc\STATUS_OK) {
    echo "Call did not complete successfully. Status object:\n";
    var_dump($status);
    exit(1);
}
$items = $reply->getItems();
foreach ($items as $item) {
    echo $item->getId()." - ".$item->getText().PHP_EOL;
}

?>