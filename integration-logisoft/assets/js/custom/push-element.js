$(document).ready(function () {
    const $code = $("#code");
    const $categorie = $("#categorie");
    const $debut = $("#debut");
    const $fin = $("#fin");
    const $qte = $("#qte");
    const $occupation = $("#occupation");
    const $adulte = $("#adulte");
    const $enfant = $("#enfant");
    const $bebe = $("#bebe");
    const $prestation = $("#prestation"); // <-- ajout

    const $tableBody = $("#roomTable tbody");

    const $paxDossier = $("#paxDossier");
    const $totalAdultes = $("#totalAdultes");
    const $totalEnfants = $("#totalEnfants");
    const $totalBebes = $("#totalBebes");

    let fixedCodeForPax = null;

    function fillSelect($select, max = 10) {
        $select.empty();
        for (let i = 0; i <= max; i++) {
            $select.append(`<option value="${i}">${i}</option>`);
        }
        $select.val(0);
    }

    fillSelect($adulte);
    fillSelect($enfant);
    fillSelect($bebe);

    function calculatePaxDossier() {
        const codeMap = {};
        const codes = [];

        $("#roomTable tbody tr").each(function () {
            const code = $(this).find("td:eq(0)").text().trim();
            const occupation = $(this).find("td:eq(5)").text().trim();
            const adultes = parseInt($(this).find("td:eq(6)").text()) || 0;
            const enfants = parseInt($(this).find("td:eq(7)").text()) || 0;
            const bebes = parseInt($(this).find("td:eq(8)").text()) || 0;

            codes.push(code);

            if (!codeMap[code]) {
                codeMap[code] = {
                    occupation,
                    adultes,
                    enfants,
                    bebes,
                };
            } else {
                codeMap[code].adultes += adultes;
                codeMap[code].enfants += enfants;
                codeMap[code].bebes += bebes;
            }
        });

        // Si le tableau est vide, vider pax/dossier
        if (codes.length === 0) {
            fixedCodeForPax = null;
            $totalAdultes.val(0);
            $totalEnfants.val(0);
            $totalBebes.val(0);
            $paxDossier.val(0);
        } else {
            if (!fixedCodeForPax) {
                fixedCodeForPax = codes[0];
            }

            if (fixedCodeForPax && codeMap[fixedCodeForPax]) {
                const room = codeMap[fixedCodeForPax];
                $totalAdultes.val(room.adultes);
                $totalEnfants.val(room.enfants);
                $totalBebes.val(room.bebes);
                $paxDossier.val(room.adultes + room.enfants + room.bebes);
            }
        }

        updateOccupantsTableAll();
    }

    function updateOccupantsTableAll() {
        const $body = $("#occupantsTable tbody");
        $body.empty();

        $("#roomTable tbody tr").each(function () {
            const chambreCode = $(this).find("td:eq(0)").text().trim();
            const chambreCat = $(this).find("td:eq(1)").text().trim();
            const occupation = $(this).find("td:eq(5)").text().trim();
            const adultes = parseInt($(this).find("td:eq(6)").text()) || 0;
            const enfants = parseInt($(this).find("td:eq(7)").text()) || 0;
            const bebes = parseInt($(this).find("td:eq(8)").text()) || 0;
            const prestation = $(this).find("td:eq(9)").text().trim();

            let firstRow = true;

            function addRow(genre) {
                const firstCol = firstRow
                    ? `${occupation}<br><span class="code-ch">${chambreCode}</span><br><span class="code-ch">${chambreCat}</span>`
                    : "";
                $body.append(`
                    <tr>
                        <td>${firstCol}</td>
                        <td>${genre}</td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="date"></td>
                        <td><input type="text"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                `);
                firstRow = false;
            }

            for (let i = 0; i < adultes; i++) addRow("M");
            for (let i = 0; i < enfants; i++) addRow("Chd");
            for (let i = 0; i < bebes; i++) addRow("BB");
        });
    }

    /* ============================
       POPUP ALERT FUNCTIONS
    ============================ */

    function showPopup(message) {
        $("#popupAlert .popup-message").text(message);
        $("#popupAlert").addClass("active");
    }
    // bouton OK
    $(document).on("click", ".popup-close", function () {
        $("#popupAlert").removeClass("active");
    });
    // fermer si clic dehors
    $("#popupAlert").on("click", function (e) {
        if (e.target === this) {
            $(this).removeClass("active");
        }
    });

    $("#btnAddRoom").on("click", function () {
        if (!$code.val() || !$categorie.val() || !$debut.val() || !$fin.val()) {
            showPopup();
            return;
        }

        if (parseInt($adulte.val()) === 0) {
            showPopup();

            return;
        }

        const occupationLabel = $occupation.find("option:selected").text();
        const prestationLabel = $prestation.find("option:selected").text();

        const row = `
            <tr>
                <td>${$code.val().trim().toUpperCase()}</td>
                <td>${$categorie.val()}</td>
                <td>${$debut.val()}</td>
                <td>${$fin.val()}</td>
                <td>${$qte.val()}</td>
                <td>${occupationLabel}</td>
                <td>${$adulte.val()}</td>
                <td>${$enfant.val()}</td>
                <td>${$bebe.val()}</td>
                <td>${prestationLabel}</td> <!-- <-- ajout -->
                <td>
                    <button type="button" class="btn-remove remove">
                        Supprimer
                    </button>
                </td>
            </tr>
        `;

        $tableBody.append(row);

        $(".remove")
            .off()
            .on("click", function () {
                $(this).closest("tr").remove();

                // Recalcul automatique et reset si tableau vide
                fixedCodeForPax = null; // on réinitialise à chaque suppression
                calculatePaxDossier();
            });
        // Reset formulaire
        $code.val("");
        $categorie.prop("selectedIndex", 0);
        $debut.val("");
        $fin.val("");
        $qte.val(1);
        $occupation.val("1");
        fillSelect($adulte);
        fillSelect($enfant);
        fillSelect($bebe);
        $prestation.prop("selectedIndex", 0);
        calculatePaxDossier();
    });

    calculatePaxDossier();
});
