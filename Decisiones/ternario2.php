<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $edad = 17;
        if($edad<=17){
            echo 'Eres menor de edad';
        }else{
            echo 'Eres mayor de edad';
        }

        //Ternario
        echo '<br>';
        var_dump($edad<=17);
        echo '<br>';
        echo $edad<=17 ? 'Eres menor de edad': 'Eres mayor de edad';
    ?>
</body>
</html>