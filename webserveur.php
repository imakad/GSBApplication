<?php
// donner l'emplacement du serveur + configurer
  require_once("lib/nusoap.php"); 

  $server = new soap_server();
  $server ->configureWSDL('demo','Namespace'); 
  $server ->wsdl->schemaTargetNamespace = 'http://localhost/projet1/';
  $server->wsdl->addComplexType(
 'ListArray',
 'complexType',
 'array',
 '',
 'SOAP-ENC:Array',
  array(),
  array(
    array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'xsd:array[]')
  ),
  'xsd:array'
);
  $server->register('getobjet',
                           array('id'=>'xsd:integer'),
                           array('return' => 'xsd:Array'),'Namespace'
              );
//$server->register('modifProfilVst',array('id'=>'xsd:integer','modif'=>'xsd:string'),array('return'=>'xsd:integer'),'Namespace');
function getobjet()
{
        $wsdl = 'http://localhost/projet1/webserveur.php?wsdl';
        $soapclt = new SoapClient($wsdl);
        $soapclt->getobjet();
	$pdo = new pdo("mysql:dbname=gsbdb;host=localhost","root","");
	$statement = $pdo->query("select * from visiteurs where id_v = 1");
	$liste = $statement->fetchAll(PDO::FETCH_OBJ);
	$liste[]= 0;
	return $liste;
        
}
  $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
  $server->service($HTTP_RAW_POST_DATA);