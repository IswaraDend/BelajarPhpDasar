<?php

$data = [
    "action" => "create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

$action = $data["action"] ?? "Nothing";