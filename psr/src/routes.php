<?php

return [
    '~hello/(.*)$~' => [\MyProject\Controllers\MainController::class, 'sayHello'],
    '~bay/(r)$~' => [\MyProject\Controllers\MainController::class, 'sayBay'],
    '~^$~' => [\MyProject\Controllers\MainController::class, 'main'],
];
