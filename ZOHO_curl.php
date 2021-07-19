<?php
// +++

$call_url= curl_init();
curl_setopt($call_url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($call_url, CURLOPT_URL, 'https://accounts.zoho.com/oauth/v2/token');
curl_setopt($call_url, CURLOPT_POST, 1);
$parameters=array(

    'grant_type'=>'authorization_code',
    'client_id'=>'1000.7BIUM141G48NK0XTH099SPGAROY26M',
    'client_secret'=>'34a6f750dd62b6316de31c32a1bb78aa51c9b358ec',
    'scope'=>'ZohoCRM.modules.leads.create',
    'code'=>'1000.2575da1ad60423502d654df16030a833.dc817cbe67cb9ce29bcc0ed9619a280a'

);
 
curl_setopt($call_url, CURLOPT_POSTFIELDS,$parameters);
 $result = curl_exec($call_url);
 curl_close($call_url);
 $result = json_decode($result, true);
 print_r($result);
?>