<?php

     $prenom=$_REQUEST['prenom'];
     $nom=$_REQUEST['nom'];
     $telephone=$_REQUEST['telephone'];
     $adresse=$_REQUEST['adresse'];
     $email=$_REQUEST['email'];
     $service=$_REQUEST['service'];

     $conn1=mysqli_connect('localhost','bouki','passer','callcenter');
     $req="update client set adresse='$adresse', service='$service', where telephone='$telephone'";
     $result=mysqli_query($conn,$req);
     echo "mise a jour avec succes";
?>
