<?php
if($bdd = mysqli_connect('localhost', 'root', '', 'wjfc_shopping')){
echo "reussi";
    // Si la connexion a réussi, rien ne se passe.
}
else {
die("Une Erreur est survenue pendant la connexion à la BD"); // On affiche un message d'erreur.
}
(isset($_POST['nom'])&&($_POST['email'])&&($_POST['numero'])&&($_POST['commentaire']){
    $nom=$_POST['nom'];
    $numero=$_POST['numero'];
    $email=$_POST['email'];
    $commentaire=$_POST['commentaire'];

    $bdd=mysqli_connect('localhost','root','','wjfc_shopping');
$query=mysqli_query($connexion,"INSERT INTO contact(nom,email,numero,commentaire)
values("$nom","$email","$numero","$commentaire")");
   }
}

?>