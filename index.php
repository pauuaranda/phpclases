<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase PHP -2</title>
</head>
<body>
    <h2>
    <h2>practica con dani</h2>
    <?php
    $valor1=10;
    $valor2=20;
    $resultado=0;
    if($valor1>$valor2){
        $resultado=$valor1+$valor2;
    }
    else{
        $resultado=$valor1*$valor2;
    }
    echo "El resultado es: $resultado"
    ?>
    <br>
    <h2>practica clase punto 1</h2>
    <?php
    $numero1= 4;
    $numero2= 8;
    $resultado2=0;

    if($numero1>$numero2){
        echo "El numero mayor es $numero1";
    }
    else{
        echo "El numero mayor es $numero2";
    }
    ?>
    <br>
    <h2>practica clase punto 2</h2>
    <?php
     $random=rand(1,5);

     if($random===3||$random===5){
         echo($random);
     }
    ?>
    <br>
    <h2>practica clase punto 3</h2>
    <?php
     if ($random!=3){
         echo("El numero NO es 3");
     }
     else{
         echo("3");
     }
    ?>
    <br>
    <h2>practica clase punto 4</h2>
    <?php
    $random2=rand(1,100);

     if($random2>50){
    echo("El numero es mayor a 50");
    }
     if($random2<50){
    echo("El número es menor a 50");
}
    else if($random==50) {
    echo ("El numero es 50");
    }
     ?>
    <h2> practica clase punto 5</h2> 
    <?php
    $nombreDeUsuario= ""; 
    $ContraseniaDeUsuario="";

    if($nombreDeUsuario==="admin"&&$ContraseniaDeUsuario==="1234"){
        echo("Bienvenido!");
    }
    else{
        echo("hay un error de login");
    }
    echo "<hr>";
    $dias = ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"];
    var_dump($dias);
    $diaFestivo =rand(0,6);
    switch ($diaFestivo) {
        case 0:
            echo"$dias[0]". " Este dia es festivo";
            break;
        case 1:
            echo"$dias[1]". " Este dia es festivo";
            break;    
        case 2:
            echo"$dias[2]". " Este dia es festivo";
            break;
        case 3:
            echo"$dias[3]". " Este dia es festivo";
            break;  
        case 4:
            echo"$dias[4]". " Este dia es festivo";
            break;    
        case 5:
            echo"$dias[5]". " Este dia es festivo";
            break;
        case 6:
            echo"$dias[6]". " Este dia es festivo";
            break;                         
        
        default:
            echo("Debe especificar un numero entre 0 y 6");
            break;
    }
    echo "<hr>";
    $dni=rand(000000,23456783456);
    $nombre= "";
    $sueldo=rand(1,12000);    
    $aumento=rand(15,30);
    $nuevoSueldo=0;

    if($sueldo>=1 && $sueldo<=12000){
        $aumento=($sueldo*30)/100;
        $porcentaje=30;
        $nuevoSueldo= ($sueldo+$aumento);
        echo ("Estimado(a)$nombre portador(a) dni $dni ,su sueldo actual es de $sueldo , su aumento es de $porcentaje% y su nuevo sueldo es de $nuevoSueldo");
    }
    else{
        $aumento=($sueldo*15)/100;
        $porcentaje=15;
        $nuevoSueldo= ($sueldo+$aumento);
        echo ("Estimado(a)$nombre portador(a) dni $dni ,su sueldo actual es de $sueldo , su aumento es de $porcentaje% y su nuevo sueldo es de $nuevoSueldo");
    }
    ?>

    </h2>
</body>
</html>