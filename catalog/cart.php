<?php 
session_start();

$cart = unserialize($_COOKIE['cart']);
$db = mysqli_connect("localhost", "root", "", "testphp");
$total = 0;
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
      <h2>Блок 2</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Название</th>
                <th scope="col">количество</th>
                <th scope="col">Стоимость</th>
                </tr>
            </thead>
            <tbody>
               <?php foreach($cart as $id => $count) :
                  $id = str_replace("'", '', $id);
                  $query = "SELECT * FROM products WHERE id = $id";
                  $res = mysqli_query($db, $query); 
                  if(!$res){ die(mysqli_error($db)); } 
                  $product_id = mysqli_fetch_assoc($res);
                  $price = $product_id['price'] * $count;
                  $total = $total + $price;
                
               ?>
                    <tr>
                        <td> <?=$product_id["name"];?></td>
                        <td> <?=$count;?> </td>
                        <td> <?=$product_id["price"] * $count;?></td>
                    </tr> 
                    
                 
            
               <?php endforeach; ?>
            </tbody>
         </table>
         <?php switch($total){
                  case $total > 2000: 
                     $new_price = $total / 100 * 25;
                     $total = $total - $new_price;
                     echo  "<h3>Итого: ". $total . " у вас скидка 25%</h3>";
                     break;
                  case $total > 1200:
                     $new_price = $total / 100 * 10;
                     $total = $total - $new_price;
                     echo  "<h3>Итого: ". $total. " у вас скидка 10%</h3>";
                     break;
                  default:
                     echo  "<h3>Итого: ". $total . "</h3>";
               } 
            ?><br>
       <h5><a href="index.php">На главную</a></h5>
      </div>
    
	
   </body>
</html> 
                
                     
                    
                