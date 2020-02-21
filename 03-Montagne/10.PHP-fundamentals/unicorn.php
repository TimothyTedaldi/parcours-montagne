<html>
    <head><title>So UwU</title></head>
    <body>
        <h1> Are you a human, a cat or a unicorn ? </h1>
        <?php 
            $species = $_GET['species'];
            if($species == 'cat'){
                echo "<img src='https://media1.giphy.com/media/13borq7Zo2kulO/giphy.webp?cid=790b7611734bf361cd9dc0d99ae1d49c8114cda12b2fd8a8&rid=giphy.webp'></img>";
            }
            else if($species =='unicorn'){
                echo "<img src='https://media2.giphy.com/media/WZmgVLMt7mp44/giphy.gif?cid=790b7611db49f7c43b7a241074ef7b54dfe6f8c981db6de5&rid=giphy.gif'></img>";
            }
            else if($species == 'human'){
                echo "<img src='https://media0.giphy.com/media/kgUIf6QSYtK4U/giphy.webp?cid=790b7611e5b6d905e4e408c849e9f705fb0a174a9de821e7&rid=giphy.webp'></img>";
            }
        ?>
    </body>
</html>
