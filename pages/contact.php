<!-- Page contact -->
<?php include_once "includes/header.php"; ?>


<main class="container py-5 mb-3">
    <h1 class="text-center fw-bold fs-3 mb-5">Contactez-nous</h1>
    <p class=" text-center mt-5 mb-5">
        <!-- Description -->
    </p>
    <div class="d-flex justify-content-center">
        <div class="border border-5 rounded p-3">
            <img class="img-fluid mx-auto d-block" src="/assets/img/contact/surf.webp" alt="Surf" style="max-width: 1000px">
        </div>
    </div>

    <!-- Formulaire de contact -->
    <form action="contact.php" method="post" class="mx-auto mt-5" style="max-width: 600px;">
        <!-- Champ Nom -->
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <!-- Champ Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Champ Sujet (liste déroulante) -->
        <div class="mb-3">
            <label for="sujet" class="form-label">Sujet</label>
            <select class="form-select" id="sujet" name="sujet" required>
                <option value="" disabled selected>Choisissez un sujet</option>
                <option value="info">Demande d'information</option>
                <option value="support">Support technique</option>
                <option value="autre">Autre</option>
            </select>
        </div>

        <!-- Champ Message -->
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <!-- Traitement du formulaire -->

</main>


<?php include_once "includes/footer.php"; ?>