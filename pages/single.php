<?php include_once "includes/header.php"; ?>
<?php include_once "includes/data.php";
$id = $_GET["id"] ?? null;

if (isset($articles[$id])) {
    $content = $articles[$id];
?>

    <div class="container mt-5 py-5 mb-3">
        <div class="card mb-3 py-0 mb-3">
            <h1 class="card-header text-center"><?php echo $content["name"]; ?></h1>

            <div class="row g-0 py-4 mb-3">
                <!-- Colonne pour l'image -->
                <div class="col-md-4 center-image">
                    <img src="../assets/img/blog/<?php echo $content["imagePath"]; ?>" style="max-width: 300px" class="card-img-top rounded img-fluid mx-auto d-block py-5" alt="<?php echo $articles[$id]["name"]; ?>">
                </div>
                <!-- Colonne pour la description -->
                <div class="col-md-8 py-1">
                    <div class="card-body">
                        <p class="card-text text-justify"><?php echo $content["article"]; ?></p>
                    </div>
                </div>
            </div>
            <p class="cardcard-date text-end mb-3 me-3" style="margin-right: 20px;"> <?php echo $content["createdBy"]; ?></p>
            <p class="card-date text-end" style="margin-right: 20px;"><?php echo $content["date"]; ?></p>
            </p>
        </div>
    </div>

<?php } else { ?>

    <main class="container py-5 mb-3">

        <div class="container-fluid">
            <div class="card">
                <h1 class="card-header text-center py-2 mb-4">Article non trouvé</h1>
                <div class="card-body">
                    <p class=" lh-lg card-description text-center">Désolé l'article que vous recherchez n'existe pas.</p>

                    <div class="text-center">
                        <a href="/index.php" class="border btn btn-light">Retour à la page d'accueil</a>
                    </div>
                </div>
            </div>
            <div class="rounded p-5">
                <img class="img-fluid mx-auto d-block" src="/assets/img/articles/no-found.webp" alt="artilces-non-trouver" style="max-width: 500px">
            </div>
    </main>

<?php } ?>

<?php include_once "includes/footer.php"; ?>