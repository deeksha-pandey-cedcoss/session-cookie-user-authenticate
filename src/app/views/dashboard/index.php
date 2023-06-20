<?php

if (!$this->cookies->get("email")) {
    echo "Access Denied :(";
    die;
}
echo "<h1>Hello User Welcome To Dashboard</h1>";
echo PHP_EOL;
echo $date;
