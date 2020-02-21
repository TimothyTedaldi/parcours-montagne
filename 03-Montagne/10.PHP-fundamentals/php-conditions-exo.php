<?php
$fullname = $_GET['fullname'];

if ( strlen($fullname) == 0 ){
  echo "Ahem. You forgot to enter your name.";
  exit;
}
else{
   echo "Please excuse the non-pressence of child $fullname due to sickness.";
   
}