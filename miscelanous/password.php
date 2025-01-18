<?php
$password = 'cryptomiaou<3';
$clef; echo"<br>";
if (crypt( $password, $clef ) == $clef)
echo "le mot de passe est bon!";
else
echo "le moi de passe est faux!";
?>