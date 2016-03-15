<meta charset="UTF-8">
<title>テスト</title>
<?php
$db = new PDO('mysql:host=mysql;dbname=test', 'root', 'pass');
$db->query("INSERT INTO test VALUES('テスト太郎')");
$st = $db->query("SELECT * FROM test");
var_dump($st->fetchAll());
