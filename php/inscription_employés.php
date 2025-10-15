<?php
    // include("connexion.php");
    $conn = mysqli_connect("localhost","root","","projet1");

    $noms = $_POST['Noms'];
    $email = $_POST['Email'];
    $created_at = '2024-08-21';
    $statut = 1;
    $role = 2;
    //die($noms);
    // $query1 = "INSERT INTO users(noms, email, created_at, statut, role) values('$noms', '$email', '$created_at', '$statut', '$role' )";
    $query2 =  "SELECT  noms, role
                FROM users
                WHERE role=2";
    // mysqli_query($conn,$query1); 
    $employes = mysqli_query($conn,$query2);

    foreach($employes as $employe){
        print_r($employe);
    }

    echo "Enregistrement réussi"; 
?>
