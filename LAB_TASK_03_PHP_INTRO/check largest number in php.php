<?php
      $number1=1000;
      $number2=555;
      $number3=878;
      if($number1>$number2 && $number1>$number3){
        echo $number1;
      }
      else{
        if($number2>$number1 && $number2>$number3){
          echo $number2;
        }
        else
          echo $number3;
      }
?>