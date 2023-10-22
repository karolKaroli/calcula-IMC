<?php 

    function maiorZero($valor){
      if($valor > 0){
        return true;
      
    }else{
        return false;
      }
    }
     function calculaIMC($altura, $peso){
       if (maiorZero($peso)){
       
          $imc = (($altura*$altura)/$peso);
           
          return $imc;
         }
       else{
         return "Peso inválido";
       }

    }
    

?>