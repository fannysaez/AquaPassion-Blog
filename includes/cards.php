<?php
include 'data.php';

function getTextPreview($texte)
{
    if (strlen($texte) <= 25) {
        return $texte;
    } else {
        return substr($texte, 0, 25) . "...";
    }
}

foreach ($articles as $id => $articleCards): ?>
    <div class="col-md-3 mb-4">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/blog/<?php echo $articleCards["imagePath"]; ?>" class="card-img-top" alt="<?php echo $articlesCard["name"]; ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $articleCards["name"]; ?></h5>
                <p class="card-description"><?php echo getTextPreview($articleCards["article"]); ?></p>
                <p class="card-date"><?php echo $articleCards["date"]; ?></p>
                <p class="card-creator"><?php echo $articleCards["createdBy"]; ?></p>
                <a href="pages/single.php?id=<?php echo $id ?>" class="btn btn-primary">Ouvrir l'article</a>
                </div>
        </div>
    </div>
<?php endforeach; ?>