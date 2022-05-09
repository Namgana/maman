<?php

   $telephone=$_REQUEST['telephone'];
   $conn=mysqli_connect('localhost','bouki','passer','callcenter');
   $req="select * from client where telephone='$telephone'";
   $result=mysqli_query($conn,$req);
   if (mysqli_num_rows($result)>0)

{
  while($row=mysqli_fetch_assoc($result))
{
$prenom=$row['prenom'];
$nom=$row['nom'];
$telephone=$row['telephone'];
$adresse=$row['adresse'];
$email=$row['email'];
$service=$row['service'];

   $chaine="<form method='GET' action='update.php'>
   prenom:<input type='text' name='prenom' value=$prenom><br>
   nom:<input type='text' name='nom' value=$nom><br>
   telephone:<input type='text' name='telephone' value=$telephone><br>
   adresse:<input type='text' name='adresse' value=$adresse><br>
   email:<input type='text' name='email' value=$email><br>
   service:<textarea type='text' name='service'cols='40'rows='10'>$service</textarea><br>
  <input type='submit' value='valider'></form>";
echo $chaine;

 }
}

else
{
$chaine="<form method='GET' action='create.php'>
   prenom:<input type='text' name='prenom'><br>
   nom:<input type='text' name='nom'><br>
   telephone:<input type='text' name='telephone'><br>
   adresse:<input type='text' name='adresse'><br>
   email:<input type='text' name='email'><br>
   service:<textarea type='text' name='service' cols='40' rows='10'></textarea><br>
<input type='submit'value='valider'></form>";
echo $chaine;

}

?>











