<?php include_once "includes/header.php"; ?>

<!-- <?php
if (isset($_POST['nom']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
}
?> -->
<main class="container mt-5 py-5 mb-3">
    <div class="container-fluid">
        <div class="card">
            <h1 class="card-header text-center fw-bold fs-3">Données du formulaire</h1>
            <?php if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])); ?>
            <div class="alert alert-success" role="alert">
                Votre message à bien été envoyer avec succés !

            </div>
            <p><b>Nom :</b><br> <?php echo $_POST["nom"] ?> </p>
            <p><b>Email :</b><br> <?php echo $_POST["email"] ?> </p>
            <p><b>Sujet :</b><br>  <?php echo $_POST["sujet"] ?> </p>
            <p class="message-box"><b>Message :</b> <br> <?php echo $_POST["message"] ?> </p>
            
        </div>
    </div>

    <div class="text-center mt-3 py-3 mb-3">
    <a href="../pages/contact.php" class="btn btn-primary">Retour au formulaire</a>
    </div>

</main>


<?php include_once "includes/footer.php"; ?>