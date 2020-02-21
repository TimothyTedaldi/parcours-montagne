<?php
/**
 * Series of exercises on PHP conditional structures.
*/  


// 1.1 Clean your room Exercise 

$room_is_filthy = true;
echo '<br> ----------------------- <br> exo 1.1 <br> -----------------------';
if($room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room($room_is_filthy);
	
} else {
	echo "<br>Nothing to do, room is neat.";
}

function cleanup_room($room){
    echo "<br> ... <br> Still cleaning <br> ...";
    echo "<br>Room is now clean!";
    $room = false;
    return $room;
}



// 1.2 Clean your room Exercise, improved

// Create the array of possible states
echo '<br> ----------------------- <br> exo 1.2 <br> ----------------------- <br>';
$possible_states = ['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 

switch ($room_filthiness) {
    case "health hazard":
        echo "<br> Yuk, Room is Disgusting! Let's clean it up !"; 
        $room_filthiness = cleanup_room2($room_filthiness);
        break;
    case "filthy":
        echo "<br> Yuk, Room is dirty : let's clean it up !";
        $room_filthiness = cleanup_room2($room_filthiness);
        break;
    case "dirty":
        echo "<br> Yuk, Room is dirty : let's clean it up !";
        $room_filthiness = cleanup_room2($room_filthiness);
        break;
    case "clean":
        echo "<br> Nothing to do, room is clean already";
        break;    
    default:
        echo "<br> Nothing to do, room is neat.";
}
function cleanup_room2($room){
    echo "<br> ... <br> Still cleaning <br> ...";
    echo "<br>Room is now clean!";
    return $room = 'clean';
}



// 2. Display a different greeting message depending on the time of the day.

echo '<br> ----------------------- <br> exo 2.1 <br> ----------------------- <br>';
// to set hour to Belgium  standard
date_default_timezone_set("Europe/Brussels");
//  this is how you get hour/minute of day  : $now = date("H:i");
$nowHours = intval(date("H")); 
$nowMinutes = intval(date("i"));
$now = $nowMinutes + ($nowHours *60);
if($now > 1260 & $now < 300){
    echo "Good night !";
}else if($now < 541){
    echo "Good morning !";
}else if($now < 721){
    echo "Good day !";
}else if($now < 961){
    echo "Good afternoon !";
}else if($now < 1261){
    echo "Good evening !";
}



// 3/4. Display a different greeting according to the user's age, gender and mothertongue.

echo '<br> ----------------------- <br> exo 3/4 <br> ----------------------- <br>';

if (isset($_GET['age']) & isset($_GET['motherTongue'])){
    // Form processing
    $age = intval($_GET['age']);
    if($age < 12){
        if($_GET['motherTongue'] == "true"){
            echo "Hello kiddo!";
        }else{
            echo "Aloha kiddo!";
        }
    }else if($age < 18){
        if($_GET['motherTongue'] == "true"){
            echo "Hello Teenager !";
        }else{
            echo "Aloha Teenager !";
        }

    }else if($age < 115){
        if($_GET['motherTongue'] == "true"){
            echo "Hello Adult !";
        }else{
            echo "Aloha Adult !";
        }

    }else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    }
}

// Form
echo "<br><br>";
?>
<form method="get" action="php-Drill-exo.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php



// 5. The Girl Soccer team

echo '<br> ----------------------- <br> exo 5 <br> ----------------------- <br>';

if(isset($_GET['age']) & isset($_GET['gender'])){
    $Age = intval($_GET['age']);
    if($Age >= 21 & $Age <= 40 & $_GET['gender'] != "male"){
        echo "welcome to the team !";
    }else{
        echo "Sorry you don't fit the criteria";
    }
}

?>
<form method="get" action="php-Drill-exo.php">
	<label for="age">age</label>
	<input type="number" name="age"><br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme<br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php

// 6. Achieve the same, without the ELSE.

echo '<br> ----------------------- <br> exo 6 <br> ----------------------- <br>';

if(isset($_GET['age']) & isset($_GET['gender'])){
    $Age = intval($_GET['age']);
    if($Age >= 21 & $Age <= 40 & $_GET['gender'] != "male"){
        echo "welcome to the team !";
    }
    if(($Age < 21 || $Age > 40) || $_GET['gender'] == "male"){
        echo "Sorry you don't fit the criteria";
    }
}

?>
<form method="get" action="php-Drill-exo.php">
	<label for="age">age</label>
	<input type="number" name="age">
    <br>
    <label for="gender">Genre</label><br>
    <input type="radio" name="gender" value="male">homme<br>
    <input type="radio" name="gender" value="female">femme
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>
<?php


// 7. "School sucks!" Exercise

echo '<br> ----------------------- <br> exo 7 <br> ----------------------- <br>';

if(isset($_GET['marks']) <= 4){
    echo "This work is really bad. What a dumb kid! ";
}
if(isset($_GET['marks']) >= 5 & isset($_GET['marks']) <= 9){
    echo "This is not sufficient. More studying is required.";
}else if(isset($_GET['marks']) == 10){
    echo "barely enough !";
}else if(isset($_GET['marks']) == 11  || isset($_GET['marks']) == 12  || isset($_GET['marks']) == 13  || isset($_GET['marks']) == 14){
    echo "Not bad !";
}else if(isset($_GET['marks']) >= 15 & isset($_GET['marks']) <= 18){
    echo "Bravo, bravissimo!";
}else{
    echo "Too good to be true : confront the cheater!";
}

?>
<form method="get" action="php-Drill-exo.php">
    <input type="number" name="marks"><br>
    <input type="submit" name="submit" value="comment marks">
</form>
<?php



// 8. The "Switch" structure

echo '<br> ----------------------- <br> exo 8 <br> ----------------------- <br>';

$marks = isset($_GET['marks']

switch $marks {
    case "1":
        echo "This work is really bad. What a dumb kid! ";
        break;
    case "2":
        echo "This work is really bad. What a dumb kid! ";
        break;
    case "3":
        echo "This work is really bad. What a dumb kid! ";
        break;
    case "4":
        echo "This work is really bad. What a dumb kid! ";
        break;
    case "5":
        echo "This is not sufficient. More studying is required.";
        break;
    case "6":
        echo "This is not sufficient. More studying is required.";
        break;
    case "7":
        echo "This is not sufficient. More studying is required.";
        break;
    case "8":
        echo "This is not sufficient. More studying is required.";
        break;
    case "9":
        echo "This is not sufficient. More studying is required.";
        break;
    case "10":
        echo "barely enough !";
        break;
    case "11":
        echo "Not bad !";
        break;
    case "12":
        echo "Not bad !";
        break;
    case "13":
        echo "Not bad !";
        break;
    case "14":
        echo "Not bad !";
        break;
    case "15":
        echo "Bravo, bravissimo!";
        break;
    case "16":
        echo "Bravo, bravissimo!";
        break;
    case "17":
        echo "Bravo, bravissimo!";
        break;
    case "18":
        echo "Bravo, bravissimo!";
        break;       
    default:
        echo "Too good to be true : confront the cheater!";
}



// 9/10. Ternary operators

echo '<br> ----------------------- <br> exo 9/10 <br> ----------------------- <br>';

echo 'see tenary.php'