<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

$mpesa= new \Safaricom\Mpesa\Mpesa();


$BusinessShortCode='174379';
$LipaNaMpesaPasskey ='bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
$TransactionType='CustomerPayBillOnline';
$Amount='10';
$PartyA='254708374149';
$PartyB='600391';
$PhoneNumber='254700419377';
$CallBackURL='';
$AccountReference='';
$TransactionDesc='test api kinya';
$Remarks='';


?>