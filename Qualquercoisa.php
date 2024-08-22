<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
  $n1= 5 ;
  $n2 = 15;
  $n3 = 5;
  $salario = 800.0;

function maior($n1,$n2,$n3){
    if (($n1==$n2)||($n1==$n3)||($n2==$n3)){
        printf ("Você digitou algum número igual<br>");
    } elseif(($n1>$n2)&&($n1>$n3)){
        printf ("%d é o primeiro<br>",$n1);
        if($n2>$n3){
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n2, $n3);
        } else {
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n3, $n2);
        }
    } elseif(($n2>$n1)&&($n2>$n3)){
        printf ("%d é o primeiro<br>",$n2);
        if($n1>$n3){
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n1, $n3);
        } else {
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n3, $n1);
        }
    } elseif(($n3>$n1)&&($n3>$n2)){
        printf ("%d é o primeiro<br>",$n3);
        if($n2>$n1){
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n2, $n1);
        } else {
            printf ("%d é o segundo<br>%d é o terceiro<br>", $n1, $n2);
        }
    } 
}

function menor($n1,$n2,$n3){
    if (($n1==$n2)||($n1==$n3)||($n2==$n3)){
        printf ("Você digitou algum número igual<br>");
    } elseif(($n1<$n2)&&($n1<$n3)){
        printf ("%d é o terceiro<br>",$n1);
        if($n2<$n3){
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n2, $n3);
        } else {
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n3, $n2);
        }
    } elseif(($n2<$n1)&&($n2<$n3)){
        printf ("%d é o terceiro<br>",$n2);
        if($n1<$n3){
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n1, $n3);
        } else {
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n3, $n1);
        }
    } elseif(($n3<$n1)&&($n3<$n2)){
        printf ("%d é o terceiro<br>",$n3);
        if($n2<$n1){
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n2, $n1);
        } else {
            printf ("%d é o segundo<br>%d é o primeiro<br>", $n1, $n2);
        }
    }
}

function cresc($n1,$n2,$n3){
    if (($n1 > $n2)&&($n1>$n3)){
        if (($n3<$n2)){
            printf ("%d é o maior e %d é o menor",$n1,$n3);
        } else {
            printf("%d é maior e %d é o menor",$n1.$n2);
        }
    }

    else if (($n2>$n3)&&($n2>$n1)){
        if($n3>$n1){
            printf ("%d é o maior e %d é o menor", $$n2 , $n1);
        } else {
            printf ("%d é o maior e %d é o menor", $n2 , $n3);
        }
    }

    else if (($n3>$n2)&&($n3>$n1)){
        if($n1>$n2){
            printf ("%d é o maior e %d é o menor", $n2 , $n2);
        } else {
            printf ("%d é o maior e %d é o menor", $n2 , $n1);
        }
    }
}

function salario($salario){
    $salario_original = $salario;
    if ($salario > 0 && $salario <281){
        printf("salario antes do aumento: %d <br>",$salario);
        $salario = $salario * 1.2;
        printf("porcentagem do aumento: %d <br>",(($salario/$salario_original)*100-100));
        printf("valor do aumento: %d <br>" ,(($salario-$salario_original)));
        printf("novo salario: %d <br>",($salario));
    } else if($salario >= 280 && $salario<700) {
        printf("salario antes do aumento: %d <br>",$salario);
        $salario = $salario * 1.15;
        printf("porcentagem do aumento: %d <br>",(($salario/$salario_original)*100-100));
        printf("valor do aumento: %d <br>" ,(($salario-$salario_original)));
        printf("novo salario: %d <br>",($salario));    
    } else if($salario >= 700 && $salario<1500) {
        printf("salario antes do aumento: %d <br>",$salario);
        $salario = $salario * 1.1;  
        printf("porcentagem do aumento: %d <br>",(($salario/$salario_original)*100-100));
        printf("valor do aumento: %d <br>" ,(($salario-$salario_original)));
        printf("novo salario: %d <br>",($salario));
    } else {
        printf("salario antes do aumento: %d <br>",$salario);
        $salario = $salario *1.05;
        printf("porcentagem do aumento: %d  <br>",(($salario/$salario_original)*100-100));
        printf("valor do aumento: %d <br>" ,(($salario-$salario_original)));
        printf("novo salario: %d <br>",($salario));
    }
    
    }

menor($n1,$n2,$n3);
printf("<br>");
maior($n1,$n2,$n3);
printf("<br>");
cresc($n1,$n2,$n3);
printf("<br>");
printf("<br>");
salario($salario)
     ?>
    
</body>
</html>

