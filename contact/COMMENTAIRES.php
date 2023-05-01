<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Groupe43.css">
    <title>Site officielle de EL HADJI OUSSEYNOU DIOUF</title>
    <link rel="stylesheet" type="text/css" href="bootstraps.min.css">
</head>
<body>
    <nav> 
   <label><img src="sadio.jpg"></label>
    <ul>
          <li><a href='index.php'> ACCUEIL</a></li>
         <li><a href='Groupe41.php'>BIOGRAPHIE </a></li>
          <li><a href='Groupe42.php'>PALMARES </a></li>
         
         <li><a href="COMMENTAIRES.php">COMMENTAIRES</a></li>
         
        
      </ul>
        </nav><br><br><br><br><br>
<?php
   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elhadji_diouf";
       $connexion = mysqli_connect($servername, $username, $password, $dbname);
            $sql="SELECT * FROM contact";
            $listes=mysqli_query($connexion,$sql);    
?>
<h1 ><b><u><p align="center">Liste des Commentaires</p></u></b></h1>
<table class="table table-success table-striped">
    <tr>
       
        <th>Prénom</th>
        <th>Nom</th>
        <th>E-mail</th>
        <th>Commentaires</th>
    </tr>
    <?php while($l=mysqli_fetch_row($listes)):  ?>
    <tr >
       
        <td><?= $l[1] ?></td>
        <td><?= $l[2] ?></td>
        <td><?= $l[3] ?></td>
        <td><?= $l[4] ?></td>

      
    </tr>
    <?php endwhile ?>

</table>


    
                     
 
</body>
</html>
