<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronouns){
	echo $pronouns;
	if($pronouns != 'He/She'){
		echo " code <br>";
	}
	else{
		echo " codes <br>";
	}
}

$numbers = 1;

while ($numbers <= 120)
{
    echo "$numbers <br>";
    $numbers ++; 
}

for ($numbers = 1; $numbers <= 120; $numbers ++)
{
    echo "$numbers <br>";
}


$startupWorkersName = array ('Soufiane', 'Marco', 'Hugo', 'Timothy', 'Joefrey');

foreach ($startupWorkersName as $startupWorkersName){
	echo "$startupWorkersName <br>";
}


$countries = array('Country','BE'=>'Belgium', 'FR'=>'France', 'DE'=>'Germany', 'PL'=>'Poland', 'IT'=>'Italy', 'AT'=>'Austria', 'KR'=>'Korea', 'CN'=>'China', 'JP'=>'Japan', 'IN'=>'India');

echo '<select>';
foreach($countries as $iso => $countries){
    echo "<option value="$iso">{$countries}</option>";
}
echo '</select>';