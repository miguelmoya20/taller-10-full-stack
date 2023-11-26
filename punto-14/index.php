<?php
 include 'passwordCheck.php'; 
 //DATOS DE ENTRADA
 $user = " ";
 $password = " ";

//PROCESO
 echo "Ingrese su usuario a registrar: \n";
 $user = readline();

 echo "Ingrese su contraseña a registrar: \n";
 $password = readline();

if (hasSecurityLong($password)) {  
  if (hasUpperLetter($password)) {
    if (hasNumber($password)) {
      echo "Su contraseña es segura y quedo registrada \n";
    } else {
      echo "Su contraseña no contiene un numero \n";
    }
    
  } else {
    echo "Su contraseña no contiene una letra mayuscula \n";
  }
  
} else {
  echo "Su contraseña no cumple con la longitud segura \n";
}
 ?>