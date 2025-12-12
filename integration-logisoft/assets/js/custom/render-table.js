$(document).ready(function () {
    RenderTable();
});

function RenderTable() {
    const table = document.querySelector(".custom-table");
    // Si le tableau n'existe pas, on arrête la fonction
    if (!table) return;
    const tbody = table.querySelector("tbody");
    if (!tbody) return;
    const rows = Array.from(tbody.querySelectorAll("tr"));

    const pagination = document.querySelector(".pagination");
    const info = pagination.querySelector(".info");
    const firstBtn = pagination.querySelector(".first");
    const prevBtn = pagination.querySelector(".arrow-prev");
    const nextBtn = pagination.querySelector(".arrow-next");
    const lastBtn = pagination.querySelector(".last");

    const searchInput = document.querySelector("#tableSearch");
    const rowsSelect = document.querySelector("#rowsPerPageSelect");

    let rowsPerPage = parseInt(rowsSelect.value);
    let currentPage = 1;

    // Contient les lignes filtrées (colonnes + global)
    let filteredRows = [...rows];

    /** RENDU DE LA PAGINATION **/
    function renderTablePage(page) {
        const totalRows = filteredRows.length;
        const totalPages = Math.ceil(totalRows / rowsPerPage) || 1;

        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;

        currentPage = page;

        // On cache toutes les lignes
        rows.forEach((r) => (r.style.display = "none"));

        // On affiche uniquement les lignes visibles
        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        filteredRows.slice(start, end).forEach((r) => (r.style.display = ""));

        // Update info
        const startInfo = totalRows === 0 ? 0 : start + 1;
        const endInfo = Math.min(end, totalRows);
        info.textContent = `${startInfo} à ${endInfo} sur ${totalRows}`;

        // Gestion des boutons
        firstBtn.disabled = prevBtn.disabled = page === 1;
        nextBtn.disabled = lastBtn.disabled = page === totalPages;
    }

    /** FILTRE PAR COLONNE **/
    document
        .querySelectorAll(".custom-table thead .filters input")
        .forEach((input, colIndex) => {
            input.addEventListener("keyup", function () {
                const filterValue = this.value.toLowerCase();

                // MAJ filteredRows
                filteredRows = rows.filter((row) => {
                    const cell = row.children[colIndex];
                    return cell.textContent.toLowerCase().includes(filterValue);
                });

                renderTablePage(1);
            });
        });

    /** FILTRE GLOBAL **/
    searchInput.addEventListener("keyup", function () {
        const term = this.value.toLowerCase();
        filteredRows = rows.filter((row) =>
            Array.from(row.children).some((cell) =>
                cell.textContent.toLowerCase().includes(term)
            )
        );
        renderTablePage(1);
    });

    /** CHANGEMENT NOMBRE DE LIGNES **/
    rowsSelect.addEventListener("change", function () {
        rowsPerPage = parseInt(this.value);
        renderTablePage(1);
    });

    /** ÉVÈNEMENTS PAGINATION **/
    firstBtn.addEventListener("click", () => renderTablePage(1));
    prevBtn.addEventListener("click", () => renderTablePage(currentPage - 1));
    nextBtn.addEventListener("click", () => renderTablePage(currentPage + 1));
    lastBtn.addEventListener("click", () => {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        renderTablePage(totalPages);
    });

    // PREMIER RENDU
    renderTablePage(1);
}
