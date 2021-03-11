<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'saurusbeats@gmail.com';
$ocupacion = $_POST['ocupacion'];
$header = 'From: ' . $email;
$checkbox =$_POST['exampleCheck1']
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Ocupacion: $ocupacion\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
    $recipient = $para;
if (mail($para, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'https://agustinguillen.github.io/saurusbeats/contacto.html';
</script>";
} else {
echo 'Falló el envio';
}
}
?>