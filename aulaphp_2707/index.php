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
for($i = 1; $i <= 100; $i++){
    echo "<div>";
    echo "<h4>Tabuada do $i</h4>";
    for($j = 0; $j <= 10; $j++){
        echo $i . " x " . $j . "=" . $i*$j ."<br>";
    }
    echo "</div>";
}
?>
</body>
</html>



