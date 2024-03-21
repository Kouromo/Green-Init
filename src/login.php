<?php
require_once('connexion_Bdd.php');
session_start();

function show_form() {
    echo "<h1>Connexion</h1>";
    if(isset($_SESSION['error_login'])) echo "<p>" . $_SESSION['error_login'] . "</p>";
    echo "
    <form method='post' action='login.php'>
        <label for='username'>Nom d'utilisateur :</label>
        <input type='text' name='username' id='username' required><br><br>
        <label for='password'>Mot de passe :</label>
        <input type='password' name='password' id='password' required><br><br>
        <input type='submit' value='Se connecter'>
    </form>";
}

if(isset($_SESSION['utilisateur_connecte']) && $_SESSION['utilisateur_connecte']) {
    echo "<p>Already logged</p>";
} else if(!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM utilisateur WHERE nom_utilisateur = :username";
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password, $row['mdp'])) {
            $_SESSION['utilisateur_connecte'] = true;
            $_SESSION['error_login'] = "";
            echo "authentification réussie";
            echo "<a href='commentEtPourquoiAgir.php'>TEST</a>";
        } else {
            $_SESSION['error_login'] = "Mot de passe incorrect.";
            show_form();
        }
    } else {
        $_SESSION['error_login'] = "Nom d'utilisateur incorrect.";
        show_form();
    }
} else {
    show_form();
}
?>