
<?php include("../SIMPLON/Pages/header.php") ?>
<?php require_once('db/insertion.php'); ?>

<h2 class="text-center mt-3 perso_colorRougeMenu perso_policeTitre perso_textShadow">Enregistrez-vous</h2>

<div class="form" id="form1">
    <form method="post" action="" class="form row no-gutters" id="form">
        <div class="form-group col-lg-6" id="form-group">
            <label for="nom" class="label">Nom*</label>
            <input type="text" name="nom" class="form-control" id="nom">
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Prénoms*</label>
            <input type="text" name="prenom" class="form-control" id="prenom">
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Contact*</label>
            <input type="text" name="contact" class="form-control" id="number">
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Email*</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group col-lg-12" id="form-group">
            <button type="submit" class="btn btn-primary" value="enregrister" name="enregistrer" id="enregistrer">Enregrister</button>
            <button type="button" class="btn btn-second perso_policeTitre" value="liste" name="liste" id="liste">Voir la liste</button>
        </div>
    </form>
</div>
<?php require_once('db/close_db.php'); ?>
<?php include("../SIMPLON/Pages/footer.php") ?>