<?php 
include __DIR__ ."./data/data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Password Generator</h1>

    <h2><?php echo random_password(3, 2, 3, 2);?></h2>
</body>
</html>