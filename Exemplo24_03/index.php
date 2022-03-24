<?php
   $valor = 9;

   if($valor < 10){
    //Verdadeiro
    //IR PARA A PAGINA adm.php
    header('Location: adm.php');

    //MESMA COISA COM JS
    // echo  '
    //   <script type="text/javascript">
    //     alert("ok tudo certo,vamos para adm.php")
    //   </script>
    // '
    
    } else {
        //FALSO
        //IR PARA A PAGINA erro.php
        header('location: erro.php');
    }


?>