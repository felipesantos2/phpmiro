<!DOCTYPE html>
<html lang="pt-BR">

<head>
<?php  require __DIR__ . '/head.php'; ?>
</head>

<body>
<?php
    $filePath = __DIR__ . '/' . $page .'.php';

    if(file_exists($filePath )) {
        include $filePath;
    }
?>

</body>
</html>
