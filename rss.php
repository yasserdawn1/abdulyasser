<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://yasserdawn.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $subject = $data->getElementsByTagName("subject")->item(0)->nodeValue;
    $teacher = $data->getElementsByTagName("teacher")->item(0)->nodeValue;
    $schedule = $data->getElementsByTagName("schedule")->item(0)->nodeValue;

    echo "
    <ul>
    <li>subject: <strong>$subject</strong></li>
    <li>teacher: <strong>$teacher</strong></li>
    <li>schedule: <strong>$schedule</strong></li>
    </ul>";
}
