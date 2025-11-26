$(document).ready(function () {
    RenderTable();
});
function RenderTable() {
    const table = document.querySelector(".custom-table");
    const tbody = table.querySelector("tbody");
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
    let filteredRows = [...rows];

    function renderTablePage(page) {
        const totalRows = filteredRows.length;
        const totalPages = Math.ceil(totalRows / rowsPerPage);
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;

        rows.forEach((r) => (r.style.display = "none"));

        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        filteredRows.slice(start, end).forEach((r) => (r.style.display = ""));

        const startInfo = totalRows === 0 ? 0 : start + 1;
        const endInfo = Math.min(end, totalRows);
        info.textContent = `${startInfo} à ${endInfo} sur ${totalRows}`;

        firstBtn.disabled = prevBtn.disabled = page === 1;
        nextBtn.disabled = lastBtn.disabled = page === totalPages;
    }

    // Pagination
    firstBtn.addEventListener("click", () => renderTablePage(1));
    prevBtn.addEventListener("click", () => renderTablePage(currentPage - 1));
    nextBtn.addEventListener("click", () => renderTablePage(currentPage + 1));
    lastBtn.addEventListener("click", () => {
        const totalPages = Math.ceil(filteredRows.length / rowsPerPage);
        renderTablePage(totalPages);
    });

    // 🔍 Recherche globale
    searchInput.addEventListener("keyup", function () {
        const term = this.value.toLowerCase();
        filteredRows = rows.filter((row) =>
            Array.from(row.children).some((cell) =>
                cell.textContent.toLowerCase().includes(term)
            )
        );
        renderTablePage(1);
    });

    // 🔢 Changement du nombre de lignes
    rowsSelect.addEventListener("change", function () {
        rowsPerPage = parseInt(this.value);
        renderTablePage(1);
    });

    renderTablePage(1);
}
