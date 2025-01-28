<?php include_once "includes/header.php"; ?>

<?php
if (isset($_POST['nom']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    // echo  "<p>" .  $nom . "</p>";
    // echo "<p>" .  $email . "</p>";
}
?>
<main class="container mt-5 py-5 mb-3">
    <div class="container-fluid">
        <div class="card">
            <h1 class="card-header text-center fw-bold fs-3">Données du formulaire</h1>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
    <div class="text-center mt-5 py-5 mb-3">
    <a href="../pages/contact.php" class="btn btn-primary">Retour au formulaire</a>
    </div>
</main>


<?php include_once "includes/footer.php"; ?>