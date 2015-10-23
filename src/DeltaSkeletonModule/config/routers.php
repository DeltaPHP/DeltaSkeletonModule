<?php

return [
    [
        "methods" => [\DeltaRouter\Route::METHOD_ALL],
        "patterns" => [
            "part" => \DeltaRouter\RoutePattern::PART_PATH,
            "type" => \DeltaRouter\RoutePattern::TYPE_REGEXP,
            "value" => "/deltaskeletonmodule/?(?<id>\w*)",
        ],
        "action" => ["index", "index"],
        "args" => ["info"=>true]
    ],
    [
        "methods" => [\DeltaRouter\Route::METHOD_ALL],
        "patterns" => [
            "part" => \DeltaRouter\RoutePattern::PART_PATH,
            "type" => \DeltaRouter\RoutePattern::TYPE_FULL,
            "value" => "/deltaskeletonmodule2",
        ],
        "action" => ["index", "gview"],
    ],
];