<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        div{
            padding: 10px 10px 10px 10px;
            margin: 20px 10px 10px 10px;
            border-radius: 5px;
            background-color: beige;
            width: 120px;
            display: inline-block;
        }
    </style>
<?php
 for ($i = 2; $i <= 1000; $i++) { //for para repetir ate mil
     $isPrime = true; 
     
    for($j = 2; $j < $i; $j++){ // for para verificar se é primo
        if($i % $j == 0){
            $isPrime = false;
            break;
        }
        
    }
    if($isPrime){
        echo "<div>$i</div>";
    }
 }
?>
</body>
</html>



