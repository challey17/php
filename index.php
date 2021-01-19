<?php

// associative array, key val pairs
$person = [
    "age" => 34,
    "hair" => "blonde",
    "career" => "artist"
];

// push new key / val to array, becomes last in array
$person["name"] = "Chayce";

unset($person["hair"]);
// die func stops code execution after it is called
//used as debugger?

//die(var_dump($person));

require "index.view.php";

