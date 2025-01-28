<?php include_once "includes/header.php"; ?>

<?php
if (isset($_POST['nom']) && isset($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];

    echo  "<p>" .  $nom . "</p>";
    echo "<p>" .  $email . "</p>";
}
?>




<?php include_once "includes/footer.php"; ?>