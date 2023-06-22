<?php
require_once('person.php');

$taro = new Person('アシアル太郎');
$hanako = new Person('アシアル花子');

$taro->sayHello();
$hanako->sayHello();
?>