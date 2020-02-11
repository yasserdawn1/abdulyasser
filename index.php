<?php
header("Content-type: text/xml");

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1821964';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM exam";
$r = mysqli_query($conn, $q);

echo "<?xml version='1.0' encoding='UTF-8'?>
<data>";

while ($item = mysqli_fetch_object($r)) {
    echo "<item>
    <subject>$item->subject</subject>
    <teacher>$item->teacher</teacher>
    <schedule>$item->schedule</schedule>
    </item>";
}

echo "</data>";