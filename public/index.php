<h1>
    Olá, mundo!
</h1>

<?php

$bootstrap = require dirname(__FILE__, 2) . '/core/bootstrap.php'; // core path

if(file_exists($bootstrap)) {
    require dirname(__FILE__, 2) . '/vendor/autoload.php';
    require dirname(__FILE__, 2) . '/routes/web.php';
}

