<?php
/* Inclure les paramètres de connexion à la base de données MySQL. */
require('config_connexion_mysql.php');

/* Initialiser les variables */
$pseudo = ''; $message = '';

/* Tester le pseudo : il doit exister et ne pas être vide */
if(isset($_POST['pseudo']) && $_POST['pseudo'] != ''){
    $pseudo = $_POST['pseudo'];
}

/* Tester le message : il doit exister et ne pas être vide */
if(isset($_POST['message']) && $_POST['message'] != ''){
    $message = $_POST['message'];
}

/* Si on a un pseudo valide et un message valide --> introduire dans la table */
if($pseudo && $message){
    try {
        $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', $db_login, $db_passwd);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    
    $sql = 'INSERT INTO minichat(pseudo, message, date_message) VALUES(?, ?, NOW())';
    $params = array($pseudo, $message);
	
    $query = $db->prepare($sql);
    $query->execute($params);
    $query->closeCursor();
}

/* Rediriger vers la page du minichat */
header('Location: minichat.php');

?>