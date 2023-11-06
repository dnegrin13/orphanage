<?php 
    include_once "base.php";
?>

<h1 class="text-center">Ajouter un enfant</h1>

<?php include_once "message.php" ?>

<form id="form" class="mx-auto" action="../controller/create_ctrl_children.php" method="POST">

<label for="first_name">Prénom</label>
<input class="form-control" type="text" name="first_name" id="">

<label for="last_name">Nom</label>
<input class="form-control" type="text" name="last_name" id="">

<label for="brithdate">Date de Naissance</label>
<input class="form-control" type="date" name="brithdate" id="">

<label for="origin">Pays de Naissance</label>
<input class="form-control" type="text" name="origin" id="">

<div class="form-check">
    <input class="form-check-input" type="radio" name="sexe" checked value="homme" id="">
    <label class="form-check-label" for="sexe">Garçon</label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="sexe" value="femme" id="">
    <label class="form-check-label" for="sexe">fille</label>
</div>

<input class="form-control" type="submit" value="Ajouter">
</form>


</body>
</html>