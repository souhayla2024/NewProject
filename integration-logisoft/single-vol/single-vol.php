<section class="container">
    <div class="center-content">
        <nav class="stepper" role="navigation" aria-label="etapes">
            <button class="step active" data-step="1" aria-current="step">
                <span class="step_bubble">1</span>
                <span class="step_label">Informations Générales</span>
            </button>
            <button class="step" data-step="2">
                <span class="step_bubble">2</span>
                <span class="step_label">Tarification</span>
            </button>
            <button class="step" data-step="3">
                <span class="step_bubble">3</span>
                <span class="step_label">Convocation</span>
            </button>
        </nav>

        <!-- CONTENT AREAS FOR STEPS -->
        <form id="steps">
            <!-- STEP 1 -->
            <div class="panel active" data-panel="1" aria-labelledby="infos-title">
                <?php include 'single-vol-parts/content-step-one.php'; ?>

            </div>

            <!-- STEP 2 (Tarification) -->
            <div class="panel" data-panel="2" aria-hidden="true">
                <?php include 'single-vol-parts/content-step-two.php'; ?>


            </div>

            <!-- STEP 3 (Convocation) -->
            <div class="panel" data-panel="3" aria-hidden="true">
                <?php include 'single-vol-parts/content-step-three.php'; ?>

            </div>
            <div class="footer-submit">
                <div class="footer-part-left">
                    <button class="prev" type="button">Précédent</button>
                    <button class="reset" type="reset">Annuler</button>
                </div>
                <div class="footer-part-right">
                    <button class="next" type="button">Suivant</button>
                    <button class="submit" type="submit">Enregistrer</button>
                </div>
            </div>

        </form>
    </div>
</section>
