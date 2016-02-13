<?php
/* Inclure les paramètres de connexion à la base de données MySQL. */
require('config_connexion_mysql.php');

/* Connexion à la base de données MySQL en utilisant les paramètres définis 
    dans le fichier de configuration config_connexion_mysql.php */
try {
    $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_login, $db_passwd);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

/* Exécuter une requête afin de récupérer tous les messages existants */
$sql = "SELECT pseudo, message, DATE_FORMAT(date_message, '%d/%m/%Y à %Hh %imin %ss') as date_msg FROM minichat ORDER BY date_message DESC";
$query = $db->query($sql);
if(!$query){
    die('Erreur : Les messages ne peuvent être récupérés.');
}
//var_dump($query);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>minichat</title>
    </head>
    <body>
        <h1>Minichat</h1>
        <form action="minichat_post.php" method="post">
            <fieldset>
                <legend>Poster un message</legend>
                <p><label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" id="pseudo" maxlength="60" value="" /></p>
                <p><label for="message">Message :</label> <input type="text" name="message" id="message" size="75" maxlength="200" /></p>
                <p><label></label> <input type="submit" value="Poster" /></p>
            </fieldset>
        </form>

        <h2>Messages</h2>
        <?php 
            /* On récupère les messages un à un et on les affiche */
            while($row = $query->fetch()){
        ?>
        <p class="message">Le <?php echo $row['date_msg']; ?> <strong><?php echo htmlspecialchars($row['pseudo']); ?></strong> : <?php echo htmlspecialchars($row['message']); ?></p>
        <?php }  //fin while
            $query->closeCursor();
        ?>	
    </body>
</html>