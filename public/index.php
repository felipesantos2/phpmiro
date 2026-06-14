<?php

if(file_exists($bootstrapFile = __DIR__ . '/../core/bootstrap.php')) {
    require __DIR__ . '/../vendor/autoload.php';

    require $bootstrapFile;
    require __DIR__ . '/../routes/web.php';
} else {
    throw new Exception('Erro!')
}

