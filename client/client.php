<?php
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../', '.env');
$dotenv->load();

use TodoPackage\TodoClient;

$client = new TodoClient($_ENV['HOST'], [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);
?>