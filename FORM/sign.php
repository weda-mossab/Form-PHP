<?php include 'connexion.php' ?>
<?php include 'utilities.php' ?>
<?php 



if (!empty($_POST)){
    $name = test_input($_POST['name']);
    $mail = test_input($_POST['email']);
    $tel = test_input($_POST['tel']);
    $pays = test_input($_POST['pays']);
    $Pseudo = test_input($_POST['Pseudo']);
    $password = test_input($_POST['Pseudo']);
}

if($name=="" ) 
{
    $message='<div class="erreur">champ nom est vide.</div>';
}
elseif($name(preg_match("/^[ a-z A-Z ]*$/",$name)))
{
    $message='<div class="erreur">erreur.</div>';
}
elseif ($mail=="")
{
    $message='<div class="erreur">champ email est vide.</div>';
}elseif (!filter_var($mail, FILTER_VALIDE_EMAIL)){
      $message='<div class="erreur">mail laissé vide.</div>';
}
elseif($Pseudo(preg_match("/^[ a-z A-Z ]*$/",$Pseudo)))
{
    $message='<div class="erreur">erreur.</div>';
}elseif($password=""){
    $message='<div class="erreur">champ mot de passe est vide.</div>';
}elseif(strlen($password)<6){
    $errors="errors"
}
  $valider(header('Location:envoi.php'))
?>