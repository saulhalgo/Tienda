<?php

print_r($_GET);

$ClientID='Ad07NPoAvTST2DDb4Moeo4Nseb3vOpXRWzCgJp-dkUs8naVzemy8CBQXHnNWaq9NP_jbZhvc8Fx002qh';
$SecretID='ELcdTBkbgrRfSwYUvLf_W7tA3xApxncGxByHXi-zJ0EWBMW_pxgZ6Gg1-34mjwjuLwAsOCSVQqO974pA';

 $Login= curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token");

 curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);

 curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$SecretID);

 curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");

 $Respuesta=curl_exec($Login);

 

 $objRespuesta=json_decode($Respuesta);

 $AccesToken=$objRespuesta->access_token;

 print_r($AccesToken);



?>