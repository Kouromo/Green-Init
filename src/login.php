<?php

// Inclure le code de connexion à la base de données en utilisant PDO
require_once('connexion_Bdd.php');

session_start();

if(isset($_SESSION['utilisateur_connecte']) && $_SESSION['utilisateur_connecte'])
{
    echo "<p>Already logged</p>";
}
else if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password']))
{
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Préparation de la requête avec des paramètres nommés
    $query = "SELECT * FROM utilisateur WHERE nom_utilisateur = :username";
    $stmt = $connexion->prepare($query);
    
    // Liaison des paramètres
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);

    //$stmt->bindParam(':password', $password, PDO::PARAM_STR);
    // Exécution de la requête préparée
    $stmt->execute();

    
    // Vérification du résultat
    if ($stmt->rowCount() > 0)
    {
        // Récupère le mot de passe haché
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hash = $row['mdp'];
        if(password_verify($password, $hash))
        {
            // L'utilisateur est authentifié avec succès
            // Après une authentification réussie
            $_SESSION['utilisateur_connecte'] = true;
            echo "authentification réusie";
            echo "<a href='commentEtPourquoiAgir.php'>TEST</a>";
            //header("Location: ../fr/indexFR.php");
        }
        else
        {
            // L'authentification a échoué
            echo "Mot de passe incorrect.";
        
        }
    }
    else
    {
        // L'authentification a échoué
        echo "Nom d'utilisateur incorrect.";
    }

}
else
{
    $login = "
    <h1>Connexion</h1>
    <form method='post' action='login.php'>
        <label for='username'>Nom d'utilisateur :</label>
        <input type='text' name='username' id='username' required><br><br>

        <label for='password'>Mot de passe :</label>
        <input type='password' name='password' id='password' required><br><br>

        <input type='submit' value='Se connecter'>
    </form>
    ";
    echo $login;
}


// $connexion = null; 

?>