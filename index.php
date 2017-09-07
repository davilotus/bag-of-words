<?php require 'vendor/autoload.php' ?>
<?php $words = new \controllers\Words ?>
<?php 
$terms_1th = ['Rei','Arroz','Pato','Palhaço','Gato'];
$terms_2nd = ['Rei','Arroz','Pato','Palhaço','Gato','Azul', 'Preto'];
$terms_3nd = ['Gato','Palhaço','Botas'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php $result = $words::get_bag($terms_1th,$terms_3nd)?>
        <?=$words->bag_to_string($result)?>
    </body>
</html>







