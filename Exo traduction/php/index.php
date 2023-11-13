<?php ob_start() ?>
<link rel="stylesheet" href="style.css">

<?php 
require "template.php"
?>

<section>
    <div>
        <form action="" method="post">
            <button name="fr"><img src="img/france.png" alt=""></button>
            <button name="en"><img src="img/royaume-uni.png" alt=""></button>
            <button name="es"><img src="img/espagne.png" alt=""></button>
        </form>
        <?php 
            if (isset($_POST["fr"]) or (!isset($_POST["en"]) and !isset($_POST["es"]))){
                echo "<p class='francais'>Bienvenue sur mon site</p>
                    <p class='francais'>Je suis développeur Web</p>
                    <p class='francais'>Actuellement en formation en développeur Web et Web Mobile, je suis à la recherche d'un stage afin de mettre en pratique mes acquis théoriques</p>";
            }
            if (isset($_POST["en"])){
                echo "<p class='anglais'>Welcome to my site</p>
                <p class='anglais'>I am a Web developer</p>
                <p class='anglais'>Currently following a learning course in Web and Mobile Web Development, i am looking for an internship in order to put in action the theory i learned</p>";
            }
            if (isset($_POST["es"])){
                echo "<p class='espagnol'>Bienvenidos a mi sitio web</p>
                <p class='espagnol'>Soy un desarrollador web</p>
                <p class='espagnol'>Actualmente formándome como desarrollador Web y Web Móvil, busco prácticas para poner en práctica mis conocimientos teóricos</p>";
            }
        ?>
    </div>
    
    
</section>


