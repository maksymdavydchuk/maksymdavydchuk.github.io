<?php
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$autorization = false;

$connect = mysqli_connect('localhost', 'root', '', 'test_ajax');
if(mysqli_connect_errno()) {
    echo 'failed to connect to mysql: ' . mysqli_connect_error();
}

$result = mysqli_query($connect, "select * from login_users");

while ($row = mysqli_fetch_array($result)) {
    if ($row['name'] === $name && $row['password'] === $password) {
        echo "Hello Maksym :)";
        $autorization = true;
    }
}
if (!$autorization) {
    echo 'login or password is wrond';
}