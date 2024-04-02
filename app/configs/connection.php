<?php
define('DB_SERVEUR', 'localhost'); // Adresse du serveur de base de données
define('DB_NOM', 'ecom1_project'); // Nom de la base de données
// Data Source Name : driver + adresse serveur + nom bdd + charset à utiliser
//mysql:host=localhost;dbname=db_livre;charset=utf8;port:3306
define('DB_DSN', 'mysql:host=' . DB_SERVEUR . ';dbname=' . DB_NOM . ';charset=utf8');
define('DB_LOGIN', 'root'); // Login
define('DB_PASSWORD', ''); // Mot de passe
global $oPDO; // Variable globale pour utilisation dans des méthodes
$options =
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gestion des erreurs par des exceptions de la classe PDOException
        PDO::ATTR_EMULATE_PREPARES => false, // Préparation des requêtes non émulée

    ];
$oPDO = new PDO(DB_DSN, DB_LOGIN, DB_PASSWORD, $options);


?>