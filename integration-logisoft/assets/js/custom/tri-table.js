jQuery(function ($) {
    let directions = {};

    $("thead .arrow-tri").on("click", function (e) {
        e.preventDefault();

        const th = $(this).closest("th");
        const table = th.closest("table");
        const tbody = table.find("tbody");
        const colIndex = th.index();

        directions[colIndex] = !directions[colIndex];
        const asc = directions[colIndex];

        const rows = tbody.find("tr").get();

        rows.sort(function (a, b) {
            let A = $(a).children("td").eq(colIndex).text().trim();
            let B = $(b).children("td").eq(colIndex).text().trim();

            if ($.isNumeric(A) && $.isNumeric(B)) {
                return asc ? A - B : B - A;
            }

            return asc
                ? A.localeCompare(B, "fr", { sensitivity: "base" })
                : B.localeCompare(A, "fr", { sensitivity: "base" });
        });

        $.each(rows, function (i, row) {
            tbody.append(row);
        });
    });
});
