<?php include_once "includes/header.php"; ?>
<?php include_once "includes/data.php";
$id = $_GET["id"];
$content = $articles[$id];
?>

<main class="container py-5 mb-3">

    <div class="container-fluid">
        <h1 class="text-center py-2 mb-4"><?php echo $content["name"]; ?>
        </h1>

        <div class="card">
            <h5 class="card-header"><?php echo $content["createdBy"]; ?></h5>
            <img src="../assets/img/blog/<?php echo $content["imagePath"]; ?>" style="max-width: 600px" class="card-img-top rounded img-fluid mx-auto d-block py-5" alt="<?php echo $articles[$id]["name"]; ?>">
            <div class="card-body">
                <p class=" lh-lg card-description text-start"><?php echo $content["article"]; ?></p>

                <p class="card-date text-end"><?php echo $content["date"]; ?></p>
            </div>
        </div>
    </div>
</main>

<?php include_once "includes/footer.php"; ?>