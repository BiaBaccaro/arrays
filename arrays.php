<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$array = range(10, 100, 10);


foreach ($array as $valor) {
  
    if ($valor == 30 || $valor == 40) {
        continue;
    }
    echo $valor . "\n";
}
?>

</body>
</html>
