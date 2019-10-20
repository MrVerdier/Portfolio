<?php

 $sSenderEmail = $_GET['txtEmail'];
 $sSenderMessage = $_GET['txtMessage'];

if(!mail('andersverdier@hotmail.com', $sSenderEmail, $sSenderMessage)){
   sendResponse(0, __LINE__, 'Message could not be sent');
}

sendResponse(1, __LINE__, 'Message sent');

function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit; 
}