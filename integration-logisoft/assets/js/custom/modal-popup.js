$(document).ready(function () {
    // Ouvrir la popup
    $(".btn-open-modal").click(function () {
        $(".modal-popup-f2").addClass("active");
    });

    // Fermer la popup avec bouton close
    $(".close-popup").click(function () {
        $(".modal-popup-f2").removeClass("active");
    });

    // Fermer si on clique en dehors du container
    $(".modal-popup-f2").click(function (e) {
        if ($(e.target).is(".modal-popup-f2")) {
            $(this).removeClass("active");
        }
    });

    // Optionnel : fermer avec touche ESC
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(".modal-popup-f2").removeClass("active");
        }
    });
});
