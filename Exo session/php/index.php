<?php 
session_start();
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Session</title>
</head>

<body>
    <header>
        <ul>
            <li>
                <a href="index.php">Acceuil</a>
            </li>
            <li>
                <a href="traitement.php">Traitement</a>
            </li>
        </ul>
    </header>
    <section>
        <?php 
        if (empty($_SESSION["infos"])){
            echo '<form action="" method="post">
                    <p>Nom :</p>
                    <input type="text" name="nom">
                    <p>Age :</p>
                    <input type="number" name="age">
                    <input type="submit" name="valid" value="ENVOYER">
                </form>';
            if (isset($_POST["valid"])){
                $info=[$_POST["nom"] => $_POST["age"]];
                $_SESSION["infos"] = $info;
                echo "<div>Bonjour " . $_POST["nom"] . "</div>";
            } 
        }
        else{
            foreach ($_SESSION["infos"] as $nom => $age){
                echo "<div> Nom : " . $nom . "</div><div>Age : " . $age . "</div>";
            }
            echo '<form action="" method="post">
                    <input type="submit" name="valid2" value="Sortir de la session">
                </form>';
            if (isset($_POST["valid2"])){
                unset($_SESSION["infos"]);
            }
        }
        
        ?>
    </section>
    
</body>
</html>