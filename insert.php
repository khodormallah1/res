<?php
require 'config.php';


if(isset($_POST['submit'])){

    $categore=filter_var($_POST['categore'],FILTER_SANITIZE_STRING);
    $price=filter_var($_POST['price'],FILTER_SANITIZE_STRING);
   
   
   
    $qry= "insert into products values('$categore','$price')";
    if(mysqli_query($con,$qry)){
        echo '<script>alert("add is sussefully");</script>';
            header('');
    }
    else{
        echo mysqli_error($con);
    }

}


?>






<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
   <div class="background">
      <div class="booking-form">
        <h2>Booking</h2>
      <form action="" method="post">
    
    
    
    <label>categore</label>
    <input type="text" name="categore" id="categore" required>
    <label>price</label>
    <select  name="price" id="price" required>
     <option value="50">50</option required>
     </select>
    
    <button type="submit" name="submit" value="add">send booking</button>

        </form>
      </div>
   </div>
   <link rel="stylesheet" href="booking.css">
</body>
</html>