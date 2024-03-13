<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar</title>
</head>
<body>
     <h1>Verificação de número - Numero Redondo</h1>
     <!-- Código em PHP -->
     <form method="get" action="">
     Número <input type="text" name="id-da-tabela-para-modal" id="id-da-tab-para-modal">
    </form><?php
   $um_numero = $_GET['id-da-tabela-para-modal'];
   if($um_numero>0) {
       echo 'Positivo<br>';
   }
   else if($um_numero<0) {
       echo 'Negativo<br>';
   }
   else {
       echo 'Neutro<br>';
   }
   ?>

</body>
</html>