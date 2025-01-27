<?php include_once "includes/header.php"; ?>
<?php include_once "includes/data.php";
$id = $_GET["id"] ?? null;

if (isset($articles[$id])) {
    $content = $articles[$id];
?>
    <main class="container py-5 mb-3">
        <div class="container-fluid">
            <div class="card">
                <h1 class="card-header text-center py-2 mb-4"><?php echo $content["name"]; ?></h1>
                <img src="../assets/img/blog/<?php echo $content["imagePath"]; ?>" style="max-width: 600px" class="card-img-top rounded img-fluid mx-auto d-block py-5" alt="<?php echo $articles[$id]["name"]; ?>">
                <div class="card-body">
                    <p class=" lh-lg card-description text-start"><?php echo $content["article"]; ?></p>
                    <p class="card-date text-end"> <?php echo $content["createdBy"]; ?></p>
                    <p class="card-date text-end"><?php echo $content["date"]; ?></p>
                </div>
            </div>
        </div>
    </main>

<?php } else { ?>

    <main class="container py-5 mb-3">

        <div class="container-fluid">
            <div class="card">
                <h1 class="card-header text-center py-2 mb-4">Article non trouvé</h1>
                <div class="card-body">
                    <p class=" lh-lg card-description text-center">Désolé l'article que vous recherchez n'existe pas.</p>
                
                <div class="text-center">
                    <a href="/index.php" class="btn btn-primary ">Retour à la page d'accueil</a>
                </div>
            </div>
        </div>
            <div class="rounded p-5">
                <img class="img-fluid mx-auto d-block" src="/assets/img/articles/no-found.webp" alt="artilces-non-trouver" style="max-width: 500px">
            </div>
    </main>

<?php } ?>

<?php include_once "includes/footer.php"; ?>