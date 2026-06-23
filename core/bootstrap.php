<?php

declare(strict_types=1);

try {
    require __DIR__ . '/library/router.php';

    require __DIR__ . '/config/app.php';
    require __DIR__ . '/config/database.php';
    require __DIR__ . '/config/mail.php';
    require __DIR__ . '/config/queue.php';

} catch (Exception $e) {
    dd($e->getMessage());
}
