<?php

 $sSenderEmail = $_POST['mail'];
 $sSenderMessage = $_POST['message'];

if(!mail('andersverdier@hotmail.com', $sSenderEmail, $sSenderMessage)){
   sendResponse(0, __LINE__, 'Message could not be sent');
}

mail('andersverdier@hotmail.com', $sSenderEmail, $sSenderMessage);
sendResponse(1, __LINE__, 'Message sent');

function sendResponse($bStatus, $iLineNumber, $sMessage){
    echo '{"status":'.$bStatus.', "code":'.$iLineNumber.',"message":"'.$sMessage.'"}';
    exit; 
}