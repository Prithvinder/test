<?php $to = "test@test.com"; 
$siubject = "Testing Email Spoofing"; 
$txt = ""; 
$headers = "From:test@gmail.com"; 
mail($to,$subject,$txt,$headers); 
echo "mail_sent";
?>
