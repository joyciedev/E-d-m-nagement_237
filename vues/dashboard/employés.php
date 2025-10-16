<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employés</title>
    <link rel="stylesheet" href="../../css/employés.css">
</head>
<body>
    <?php
        include("footer.php");
        include("nav.php");
    ?>  
        <div class="search-container">    
            <form action="../../php/inscription_employés.php" class="container" method="post">
                <p>LOGIN</p>
                <input type="text" name="Noms" placeholder="Noms" requiered><br>
                <input type="email" name="Email" placeholder="Email" requiered><br>
                <input type="submit" name="submit" placeholder="Envoyer" requiered>
            </form>
        </div>
        <table border="1" class="table">
            <tr class="details-table">
                <th>Noms</th>
                <th>Email</th>
            </tr>
            <tr class="details-table">
                <td>joycie</td> 
                <td>joyciekamgo64@gmail.com</td>
            </tr>
            <tr class="details-table">
                <td>Tifanie</td>
                <td>Tifanie@gmail.com</td>
            </tr>
            <tr class="details-table">
                <td>Augustin</td>
                <td>Augustin@gmail.com</td>
            </tr>
            <tr class="details-table">
                <td>Theodore</td>
                <td>Theodore@gmail.com</td>
            </tr>
            <tr class="details-table">
                <td>Amira</td>
                <td>Amira@gmail.com</td>
            </tr>
            <tr class="details-table">
                <td>Paul</td>
                <td>Paul@gmail.com</td>
            </tr>
        </table>
</body>
</html>