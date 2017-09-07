<?php require 'vendor/autoload.php' ?>
<?php $ml = new \controllers\Mlearning ?>
<?php 
$terms_1th = ['Rei','Arroz','Pato','Palhaço','Gato'];
$terms_2nd = ['Rei','Arroz','Pato','Palhaço','Gato','Azul', 'Preto'];
$terms_3nd = ['Gato','Palhaço','Botas'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Bag Of Words | Flegas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <section class="container-fluid alert alert-info text-center">
            <?php $result = $ml::get_bag($terms_1th,$terms_3nd)?>
            <?php #$ml->bag_to_string($result)?>  

        <?php 
        $agrupamento = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,23,23.1,23.2,24,25,26,27,28,29,30,31,31.1,31.2,31.3];
        $lider = [0,1,3,6];
        $ml->grouping($agrupamento,$lider);
        ?>  
        </section>
    </body>
    <script src="js/bootstrap.min.js"></script>
</html>







