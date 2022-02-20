<?php

include 'config.php';
include 'functions.php';







$products = get_products();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h2>Блок номер 1</h2><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Стоимость</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td> <?=$product["name"];?></td>
                        <td> <?=$product["description"];?> </td>
                        <td> <?=$product["price"];?></td>
                        <td><a href="add_cart.php?id='<?=$product['id']; ?>"> + Добавить </a></td>
                    </tr> 
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
   
	
</body>
</html>