<?php

return [
    "name" => "freecasts",

    "routing" => [
        "prefix" => "freecasts",
        "middleware" => [
            "web",
            "auth"
        ]
    ]
];
