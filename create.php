<?php

     $prenom=$_REQUEST['prenom'];
     $nom=$_REQUEST['nom'];
     $telephone=$_REQUEST['telephone'];
     $adresse=$_REQUEST['adresse'];
     $email=$_REQUEST['email'];
     $service=$_REQUEST['service'];

     $conn=mysqli_connect('localhost','bouki','passer','callcenter');
     $req="insert into client(prenom,nom,telephone,adresse,email,service) values('$prenom','$nom','$telephone','$adresse','$email','$service')";
     $result=mysqli_query($conn,$req);
     echo "mise a jour avec succes";
?>
