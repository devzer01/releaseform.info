<?php

$name = $_POST['name'];

file_put_contents('names.txt', $name, FILE_APPEND);
header("Location: /");
