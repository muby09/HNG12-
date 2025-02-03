<?php

$url = "http://localhost/apitestx/api/api_index.php";

$data = file_get_contents($url);

echo "<pre>";
echo $data;