<?php

$data = "Admin:Header:Component";
$regex = "/^(([A-Z]{1})([a-z]{1,25}):)+([A-Z]{1})([a-z])+$/";

if (!preg_match($regex, $data, $matches)) {
    echo "no match<br>";
}
else {
    echo "match<br>";
}

echo print_r($matches, true);