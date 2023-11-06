<?php
include_once "../model/pdo.php";

//empty =====>
// 1 => '',
// 2 => "",
// 3 => null,
// 4 => array(),
// 5 => FALSE,
// 6 => NULL,
// 7 => '0',
// 8 => 0,

if(!empty($_POST["first_name"]) && 
!empty($_POST["last_name"]) && 
!empty($_POST["brithdate"]) && 
!empty($_POST["origin"])) {


try{
    $sql = "INSERT INTO child (first_name, last_name, brithdate, origin, sexe) VALUE (?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST["first_name"], $_POST["last_name"],$_POST["brithdate"],$_POST["origin"], $_POST["sexe"]]);
    $message = "enfant Ajouté(e)";
    header("Location:../view/create_children.php?message=$message&status=success");
    exit;
} catch(Exception $e){
   $message =  $e->getMessage();
   header("Location:../view/create_children.php?message=$message&status=failed");
   exit; 
}
}else{
    $message = "Veuillez remplir correctement le formulaire";
    header("Location:../view/create_children.php?message=$message&status=failed");
    exit; 
}