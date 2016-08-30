<?php
require_once 'classes.php';
$publications = array();

$connect = mysqli_connect('localhost', 'root', '', 'publication');
if(mysqli_connect_errno()) {
    echo 'failed to connect to mysql: ' . mysqli_connect_error();
}

$result = mysqli_query($connect, "select * from publication");

while ($row = mysqli_fetch_array($result)) {
    $publications[] = new $row['type']($row);
}