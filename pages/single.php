<?php include_once "includes/header.php"; ?>
<?php include_once "includes/data.php"; 
$id = $_GET["id"];
$content = $articles[$id];

?>


<main class="container py-5">
    <div class="container-fluid">
        <!-- Inclure le fichier de données data.php -->
        <h1 class="text-center mb-4">Titre article blog</h1>
        <div class="row">
        </div>
</main>

<?php include_once "includes/footer.php"; ?>