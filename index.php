<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        function randomBackground($lar) {
            if($lar < 150)
                return '#7FFFD4';
            if($lar <= 250)
                return '#1E90FF';
            return '#0000FF';
        }

        $func_lar = rand(50,500);

        $back_color = randomBackground($func_lar);

        echo "<div style='width: {$func_lar}px; height: ".($func_lar *2) ."px;background-color: $back_color'>"

    ?>

</body>
</html>