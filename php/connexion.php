<?php
    $conn = mysqli_connect("localhost","root","","projet1");

    if ($conn->connect_error) {
        die ("Erreur de connexion : " . $conn->connect_error);
    }

    $Noms = $_POST['Noms'];
    $Email = $_POST['Email'];

    $sql = "INSERT INTO users(noms,email)
    VALUES ('$Noms', '$Email')";

    if ($conn->query($sql) === TRUE ) {
        $succes = "Données enregistrées avec succès";
    } else {
        $erreur = "Erreur lors de l'enregistrement : " . $conn->error;
        } 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Noms"]) ||
            empty($_POST["Email"])) {
        $erreur = "Veuillez remplir tous les champs";
        } else {
            $Noms = $_POST["Noms"];
            $Email = $_POST["Email"];
        }
    }
?>
.hero-image{
    background-image: url(../images/monde.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
    width: 100%;
    position: relative;
}    

 .hero-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%); 
    z-index: 1;  
}
