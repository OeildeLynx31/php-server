<?php
$to = "oeildelynx@top7box.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = []

echo mail($to,$subject,$txt,$headers);
?>
