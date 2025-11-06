// Quand un utilisateur tape dans un champ de recherche
document
    .querySelectorAll(".custom-table thead .filters input")
    .forEach((input, colIndex) => {
        input.addEventListener("keyup", function () {
            const filterValue = this.value.toLowerCase();
            const table = this.closest("table");
            const rows = table.querySelectorAll("tbody tr");

            rows.forEach((row) => {
                const cell = row.children[colIndex];
                const cellText = cell.textContent.toLowerCase();
                // Vérifie si le texte correspond au filtre
                if (cellText.includes(filterValue)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    });
