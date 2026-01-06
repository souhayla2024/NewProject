$(document).ready(function () {
    //addRowToTable();
    addRowToTableOption();
    selectAllDaysForfait();
    orderMylementsCards();
    $(window).resize(function () {
        orderMylementsCards();
    });
});
document.addEventListener("DOMContentLoaded", () => {
    // Initialisation
    if (document.getElementById("detailsTable")) {
        addRowToTable();
    }
});

function selectAllDaysForfait() {
    const selectAll = document.getElementById("selectAllDays");
    const days = document.querySelectorAll(".day-checkbox");

    if (!selectAll || !days.length) return;

    // CLICK SUR "TOUS LES JOURS"
    selectAll.addEventListener("change", function () {
        days.forEach((day) => {
            day.checked = this.checked;
        });
    });

    // CLICK SUR UN JOUR
    days.forEach((day) => {
        day.addEventListener("change", () => {
            const allChecked = Array.from(days).every((d) => d.checked);
            selectAll.checked = allChecked;
        });
    });
}

function orderMylementsCards() {
    if (window.innerWidth < 1024) return;

    const grid = document.querySelector(".type-one .type-masonry");

    if (!grid) return;

    new Masonry(grid, {
        itemSelector: ".card",
        gutter: 24, // espace entre les éléments
    });
}

function addRowToTable() {
    const STORAGE_KEY = "forfait_details_rows";

    /* ================= INIT ================= */
    window.addEventListener("load", () => {
        renderStoredRows();
    });

    /* ================= ADD ROW ================= */
    document.getElementById("addRow").addEventListener("click", () => {
        const row = {
            type: document.getElementById("type").value,
            code: document.getElementById("code").value.trim(),
            libelle: document.getElementById("libelle").value.trim(),
            nuitee: document.getElementById("nuitee").value,
            entree: document.getElementById("entree").value,
            sortie: document.getElementById("sortie").value,
            prix: document.getElementById("prix").value || "0",
        };

        if (!row.code || !row.libelle) return;

        const data = getStoredRows();
        data.push(row);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

        // Utiliser l'index du dernier élément ajouté
        appendRow(row, data.length - 1);
        resetInputs();
    });

    /* ================= DELETE ROW ================= */
    document
        .querySelector("#detailsTable tbody")
        .addEventListener("click", (e) => {
            if (!e.target.classList.contains("btn-delete")) return;

            const index = e.target.closest("tr").dataset.index;
            const data = getStoredRows();

            data.splice(index, 1);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

            renderStoredRows();
        });

    /* ================= FUNCTIONS ================= */

    function getStoredRows() {
        return JSON.parse(localStorage.getItem(STORAGE_KEY) || "[]");
    }

    function renderStoredRows() {
        const tbody = document.querySelector("#detailsTable tbody");
        if (!tbody) return;

        tbody.innerHTML = "";
        getStoredRows().forEach((row, index) => appendRow(row, index));
    }

    function appendRow(row, index) {
        const tbody = document.querySelector("#detailsTable tbody");

        // Si index non fourni, prendre le dernier élément stocké
        if (index === undefined) {
            const data = getStoredRows();
            index = data.length - 1;
        }

        const tr = document.createElement("tr");
        tr.dataset.index = index;

        tr.innerHTML = `
            <td>${row.type}</td>
            <td>${row.code}</td>
            <td>${row.libelle}</td>
            <td>${row.nuitee}</td>
            <td>${row.entree}</td>
            <td>${row.sortie}</td>
            <td>${Number(row.prix || 0).toFixed(2)}</td>
            <td><button class="btn-delete">✕</button></td>
        `;

        tbody.appendChild(tr);
    }

    function resetInputs() {
        document
            .querySelectorAll(".input-row input")
            .forEach((i) => (i.value = ""));
    }
}

function addRowToTableOption() {
    document.addEventListener("DOMContentLoaded", () => {
        const STORAGE_KEY = "price_table_rows";

        renderRows();

        document.getElementById("addPriceRow").addEventListener("click", () => {
            const row = {
                code: document.getElementById("p_code").value.trim(),
                nom: document.getElementById("p_nom").value.trim(),
                prixVente: document.getElementById("p_prix_vente").value || "0",
                apply: document.getElementById("p_apply").value,
                prixDuree: document.getElementById("p_prix_duree").value || "0",
            };

            if (!row.code || !row.nom) return;

            const data = getRows();
            data.push(row);
            localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

            appendRow(row, data.length - 1);
            resetInputs();
        });

        document
            .querySelector("#priceTable tbody")
            .addEventListener("click", (e) => {
                if (!e.target.classList.contains("btn-delete")) return;

                const index = e.target.closest("tr").dataset.index;
                const data = getRows();

                data.splice(index, 1);
                localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
                renderRows();
            });

        /* ===== FUNCTIONS ===== */

        function getRows() {
            return JSON.parse(localStorage.getItem(STORAGE_KEY) || "[]");
        }

        function renderRows() {
            const tbody = document.querySelector("#priceTable tbody");
            tbody.innerHTML = "";
            getRows().forEach((row, index) => appendRow(row, index));
        }

        function appendRow(row, index) {
            const tr = document.createElement("tr");
            tr.dataset.index = index;

            tr.innerHTML = `
            <td>${row.code}</td>
            <td>${row.nom}</td>
            <td>${Number(row.prixVente).toFixed(2)}</td>
            <td>${row.apply}</td>
            <td>${Number(row.prixDuree).toFixed(2)}</td>
            <td><button class="btn-delete">✕</button></td>
        `;

            document.querySelector("#priceTable tbody").appendChild(tr);
        }

        function resetInputs() {
            document
                .querySelectorAll("#priceTable .input-row input")
                .forEach((i) => (i.value = ""));
        }
    });
}
addRowToTableOption();
