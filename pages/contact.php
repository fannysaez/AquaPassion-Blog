<!-- Page contact -->
<?php include_once "includes/header.php"; ?>


<main class="container py-5 mb-3">
    <!-- Titre centré -->
    <h1 class="text-center fw-bold fs-3 mb-5">Contactez-nous</h1>
    <p class="text-center mt-5 mb-5 py-3">
        <!-- Description -->
    </p>

    <!-- Conteneur pour l'image et le formulaire -->
    <div class="row gx-5">
        <!-- Colonne de gauche : Image -->
        <div class="col-md-6 d-flex align-items-center justify-content-start">
            <div class="border border-5 rounded p-3">
                <img class="img-fluid mx-auto d-block" src="/assets/img/contact/nage.webp" alt="Surf" style="max-width: 550px">
            </div>
        </div>

        <!-- Colonne de droite : Formulaire de contact -->
        <div class="col-md-6">
            <form action="contact.php" method="post">
                <!-- Champ Nom -->
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                </div>

                <!-- Champ Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                </div>

                <!-- Champ Sujet (liste déroulante) -->
                <div class="mb-3">
                    <label for="sujet" class="form-label">Sujet</label>
                    <select class="form-select" id="sujet" name="sujet" required>
                        <option value="" disabled selected>Choisissez un sujet</option>
                        <option value="info">Demande d'information sur les cours</option>
                        <option value="inscription">Inscription aux activités</option>
                        <option value="abonnement">Questions sur les abonnements</option>
                        <option value="support">Support technique (site web ou application)</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <!-- Champ Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
                </div>

                <!-- Bouton de soumission -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</main>

<?php include_once "includes/footer.php"; ?>