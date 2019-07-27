<?php
     function isAcceptedUsername($username) {
          return preg_match('/^(?:[a-z]{8})*$/',$username) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAcceptedUsername("andii")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username Is Invalid" ;
     }

     echo"<br/>";

     function isAcceptedEmail($email) {
          return preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-\.]*$/',$email) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAcceptedEmail("Andii90")) {
         echo "Email Is Valid" ;
     } else {
         echo "Email Is Invalid" ;
     }

     echo"<br/>";
     
     function isAcceptedPassword($Password) {
          return preg_match('/^(?:[a-zA-Z0-9]{8})*$/',$Password) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAcceptedPassword("Andii90q")) {
         echo "Password Is Valid" ;
     } else {
         echo "Password Is Invalid" ;
     }

     echo"<br/>";
?>