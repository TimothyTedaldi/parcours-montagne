<?php

//Tenary exercices
$gender = $_GET['gender'];
$hello = $gender == 'M'? "Hello Sir" : "Hello Madam";
echo $hello;