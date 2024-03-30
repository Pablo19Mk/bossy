<?php
 function table($operateur , $nb){
     switch($operateur){
         case "x":
            echo"<br> table de mumtication : <br>";
            for ($i=1; $i<=10;$i++  ){
                $res_multi = $nb * $i;
                echo  $nb . " fois " . $i . " font " .   $res_multi . "<br>" ;
            }
            break;
         case "+" :
            echo"<br> table d'addition : <br>";
            for ($i=1; $i<=10;$i++  ){
                $res_add = $nb + $i;
                echo  $nb . " et " . $i . " font " .   $res_add . "<br>" ;
            }
            break;
         case "/" :
            if ($nb > 0) {
                echo"<br> table de division: <br>";
                for ($i=1; $i<=10;$i++ ){
                    $res_divi = $nb * $i;
                    echo  $nb . " en " . $res_divi . " est " .   $i . "<br>" ;
                }
            }else{
                echo"tsy tokn ivoka";
            }
            break;
         case "-" :
            echo"<br> table de soustraction : <br>";
            for ($rep_sous=1; $rep_sous<=10;$rep_sous++ ){
                $i = $nb + $rep_sous;
                echo  $nb. " de " .$i   . " reste " .  $rep_sous . "<br>" ;
            }
            break;
         default :
            echo "tsy tokony ivoka ";
     }

 }
 echo table("+", 2);
 echo table("-", 5); echo table("/", 5); echo table("x", 5);