<?php
$msg = "Hello";

$test = function () use ($msg) {    // ЗАМЫКАНИЕ
    echo $msg;
};

$msg = "bye";

$test();
// ЗАМЫКАНИЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ
echo "<br>";

$msg = "Hello";

$test = function () use (&$msg) {    // ЗАМЫКАНИЕ
    echo $msg;
};

$msg = "bye";

$test();