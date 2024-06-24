<?php include_once "./db.php";
$DB=${ucfirst($_POST['table'])};
$row=$DB->find($_POST['id']);
$sw=$DB->find($_POST['sw']);
$tmp=$row['rank'];
$row['rank']=$sw['tank'];
$sw['rank']=$tmp;
$DB->save($row);
$DB->save($sw);