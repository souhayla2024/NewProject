$(document).ready(function () {
    const $steps = $(".step");
    const $panels = $(".panel");
    const $next = $(".next");
    const $prev = $(".prev");
    const totalSteps = $steps.length;
    let currentStep = 1;

    // Barre de progression (si CSS variable)
    const progressWidths = {
        1: "25%",
        2: "52%",
        3: "100%",
    };

    // Tableau pour mémoriser les steps complétés
    let completedSteps = [];

    /** ---------- VALIDATION D'UNE ÉTAPE ---------- **/
    function isStepValid(stepIndex) {
        const $panel = $panels.filter(`[data-panel="${stepIndex}"]`);
        const $inputs = $panel.find("input, select, textarea");
        let valid = true;

        $panel.find(".form-group").removeClass("has-error");
        $panel.find(".text-validator").hide();

        $inputs.each(function () {
            const $input = $(this);
            const type = $input.attr("type");
            const $group = $input.closest(".form-group");
            const $error = $group.find(".text-validator");

            if (type === "radio") {
                const name = $input.attr("name");
                if (name) {
                    const $groupRadios = $panel.find(`input[name="${name}"]`);
                    if ($groupRadios.filter(":checked").length === 0) {
                        const $firstGroup = $groupRadios
                            .first()
                            .closest(".form-group");
                        $firstGroup.addClass("has-error");
                        $firstGroup.find(".text-validator").show();
                        valid = false;
                    }
                }
            } else {
                if (
                    $input.is("[required]") &&
                    (!$input.val() || !String($input.val()).trim())
                ) {
                    $group.addClass("has-error");
                    if ($error.length) $error.show();
                    valid = false;
                }
            }
        });

        // Scroll vers premier champ en erreur
        if (!valid) {
            const firstInvalid = $panel.find(".has-error")[0];
            if (firstInvalid)
                firstInvalid.scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                });
        }

        return valid;
    }

    /** ---------- AFFICHAGE D'UNE ÉTAPE ---------- **/
    function showStep(stepIndex) {
        // Marquer les steps précédents comme complétés
        for (let i = 1; i < stepIndex; i++) {
            if (!completedSteps.includes(i)) completedSteps.push(i);
        }

        // Mettre à jour classes des steps
        $steps.each(function () {
            const idx = $(this).data("step");
            const isActive = idx === stepIndex;

            $(this).toggleClass("active", isActive);
            $(this).toggleClass("completed", completedSteps.includes(idx));
            $(this).attr("aria-current", isActive ? "step" : false);
        });

        // Afficher / masquer panels
        $panels.each(function () {
            const isActive = $(this).data("panel") == stepIndex;
            $(this).toggleClass("active", isActive);
            $(this).attr("aria-hidden", !isActive);
        });

        // Scroll vers panel actif
        const activePanel = $panels.filter(`[data-panel="${stepIndex}"]`)[0];
        if (activePanel)
            activePanel.scrollIntoView({ behavior: "smooth", block: "start" });

        // Prev / Next visibility
        if (stepIndex === 1) $prev.hide();
        else $prev.show();
        if (stepIndex === totalSteps) $next.hide();
        else $next.show();

        // Mise à jour barre de progression
        if ($(".stepper").length) {
            $(".stepper").css(
                "--progress-width",
                progressWidths[stepIndex] || "0%"
            );
        }

        currentStep = stepIndex;
    }

    /** ---------- CLICK SUR LES STEPS ---------- **/
    $steps.on("click", function () {
        const target = $(this).data("step");

        if (target > currentStep) {
            if (!isStepValid(currentStep)) return;
        }
        showStep(target);
    });

    /** ---------- BOUTON NEXT ---------- **/
    $next.on("click", function (e) {
        e.preventDefault();
        setTimeout(() => {
            if (!isStepValid(currentStep)) return;
            if (currentStep < totalSteps) showStep(currentStep + 1);
        }, 10);
    });

    /** ---------- BOUTON PREV ---------- **/
    $prev.on("click", function (e) {
        e.preventDefault();
        if (currentStep > 1) showStep(currentStep - 1);
    });

    /** ---------- VALIDATION LIVE ---------- **/
    /** ---------- VALIDATION LIVE (corrigée) ---------- **/
    $(document).on(
        "input",
        "input[required], textarea[required], select[required]",
        function () {
            const $input = $(this);
            const $group = $input.closest(".form-group");
            const $error = $group.find(".text-validator");

            if ($input.val().trim() !== "") {
                $group.removeClass("has-error");
                $error.hide();
            }
        }
    );

    $(document).on(
        "blur",
        "input[required], textarea[required], select[required]",
        function () {
            const $input = $(this);
            const $group = $input.closest(".form-group");
            const $error = $group.find(".text-validator");

            if ($input.val().trim() === "") {
                $group.addClass("has-error");
                $error.show();
            } else {
                $group.removeClass("has-error");
                $error.hide();
            }
        }
    );

    /** ---------- INIT ---------- **/
    showStep(currentStep);

    validatorInputAdd_Star_text();
});

//function pour vérifier input if is required add red star and text required
function validatorInputAdd_Star_text() {
    document
        .querySelectorAll(
            "input[required], textarea[required], select[required]"
        )
        .forEach((input) => {
            const parent = input.parentNode;

            // 1️⃣ Ajouter l'étoile rouge au label
            const label = parent.querySelector("label");
            if (label && !label.querySelector("span.required-star")) {
                const star = document.createElement("span");
                star.textContent = "*";
                star.className = "required-star";
                star.style.color = "red";
                star.style.marginLeft = "4px";
                star.style.fontWeight = "bold";
                label.appendChild(star);
            }

            // 2️⃣ Ajouter le span "Ce champ est obligatoire" si absent
            if (!parent.querySelector(".text-validator")) {
                const errorSpan = document.createElement("span");
                errorSpan.className = "text-validator";
                errorSpan.textContent = "Ce champ est obligatoire";
                errorSpan.style.display = "none"; // reste masqué par défaut
                parent.appendChild(errorSpan);
            }

            // 3️⃣ (Optionnel) définir une hauteur minimale pour les textarea
            if (input.tagName.toLowerCase() === "textarea") {
                input.style.minHeight = "80px";
            }
        });
}
