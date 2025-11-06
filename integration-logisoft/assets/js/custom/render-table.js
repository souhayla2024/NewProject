const table = document.querySelector(".custom-table");
const tbody = table.querySelector("tbody");
const rows = Array.from(tbody.querySelectorAll("tr"));
const pagination = document.querySelector(".pagination");
const info = pagination.querySelector(".info");
const firstBtn = pagination.querySelector(".first");
const prevBtn = pagination.querySelector(".prev");
const nextBtn = pagination.querySelector(".next");
const lastBtn = pagination.querySelector(".last");

const rowsPerPage = 10;
let currentPage = 1;
let filteredRows = [...rows]; // pour la recherche + pagination combinées

function renderTablePage(page) {
    const totalRows = filteredRows.length;
    const totalPages = Math.ceil(totalRows / rowsPerPage);

    // bornes
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;
    currentPage = page;

    // masque toutes les lignes
    rows.forEach((r) => (r.style.display = "none"));

    // affiche celles de la page courante
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;
    filteredRows.slice(start, end).forEach((r) => (r.style.display = ""));

    // met à jour l’info
    const startInfo = totalRows === 0 ? 0 : start + 1;
    const endInfo = Math.min(end, totalRows);
    info.textContent = `${startInfo} à ${endInfo} sur ${totalRows}`;

    // désactive les boutons si besoin
    firstBtn.disabled = prevBtn.disabled = page === 1;
    nextBtn.disabled = lastBtn.disabled = page === totalPages;
}

// Événements pagination
firstBtn.addEventListener("click", () => renderTablePage(1));
prevBtn.addEventListener("click", () => renderTablePage(currentPage - 1));
nextBtn.addEventListener("click", () => renderTablePage(currentPage + 1));
lastBtn.addEventListener("click", () => {
    const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
    renderTablePage(totalPages);
});

// Recherche par colonne (gère aussi la pagination)
document
    .querySelectorAll(".custom-table thead .filters input")
    .forEach((input, colIndex) => {
        input.addEventListener("keyup", function () {
            const filterValues = Array.from(
                document.querySelectorAll(".filters input")
            ).map((i) => i.value.toLowerCase());
            filteredRows = rows.filter((row) =>
                Array.from(row.children).every((cell, i) =>
                    cell.textContent.toLowerCase().includes(filterValues[i])
                )
            );
            renderTablePage(1); // remet à la première page
        });
    });

// initialisation
renderTablePage(1);
