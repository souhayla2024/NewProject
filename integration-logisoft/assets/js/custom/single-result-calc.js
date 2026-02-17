document.addEventListener("DOMContentLoaded", function () {
    const btnAdd = document.getElementById("btnAddCalc");
    const tableBody = document.querySelector("#calcTable tbody");

    btnAdd.addEventListener("click", function (e) {
        e.preventDefault();

        // Récupération des valeurs
        const code = document.getElementById("code").value.trim();
        const lib = document.getElementById("lib").value.trim();
        const com = document.getElementById("Com").value.trim() || "0.00";
        const price = parseFloat(document.getElementById("price").value) || 0;
        const qte = parseInt(document.getElementById("qte").value) || 1;

        // Vérification minimale
        if (!code || !lib || price <= 0) {
            alert("Veuillez remplir au moins Code, Libellé et Prix");
            return;
        }

        // Calcul du total
        const total = (price * qte).toFixed(2);

        // Création de la ligne
        const tr = document.createElement("tr");
        tr.innerHTML = `
      <td>${code}</td>
      <td>${lib}</td>
      <td>${com}</td>
      <td>${price.toFixed(2)}</td>
      <td>${qte}</td>
      <td>${total}</td>
      <td>
        <input type="checkbox" name="checkbox_s">

      </td>
    `;

        tableBody.appendChild(tr);

        // Reset des champs
        document.getElementById("code").value = "";
        document.getElementById("lib").value = "";
        document.getElementById("Com").value = "";
        document.getElementById("price").value = "";
        document.getElementById("qte").value = 1;
        document.getElementById("total").value = "";
    });
});
