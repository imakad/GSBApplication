<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
       
        <title></title>
    </head>
    <body>
  <?php  $wsdl = 'http://localhost/projet1/webserveur.php?wsdl';
$soapclt = new SoapClient($wsdl);
$res2 = $soapclt->getobjet();
var_dump($res2)
?>
    </body>
</html>
