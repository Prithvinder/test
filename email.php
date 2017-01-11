<?php $to = "test@test.com"; 
$subject = "Testing Email Spoofing"; 
$txt = ""; 
$headers = "From:test@gmail.com"; 
mail($to,$subject,$txt,$headers); 
echo "done";
?>
