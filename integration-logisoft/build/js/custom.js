"use strict";

$(document).ready(function () {
  menuBurger();
  // relloverMenuBurger()
});
function menuBurger() {
  var burger = $(".burger-nav");
  var wrapper = $("#main-wrapper");
  burger.on("click", function () {
    var isActive = wrapper.hasClass("active");
    wrapper.toggleClass("active");

    // Indique si le menu a été ouvert par clic
    wrapper.data("clicked", !isActive);
  });
}
function relloverMenuBurger() {
  var left = $(".menu-nav");
  var wrapper = $("#main-wrapper");
  left.on("mouseenter", function () {
    // si le menu n’a pas été ouvert par clic → hover actif
    if (!wrapper.data("clicked")) {
      wrapper.addClass("is-hovered");
    }
  });
  left.on("mouseleave", function () {
    // si le menu n’a pas été ouvert par clic → hover actif
    if (!wrapper.data("clicked")) {
      setTimeout(function () {
        // on vérifie encore que la souris n’est pas revenue entre temps
        if (!left.is(":hover")) {
          wrapper.removeClass("is-hovered");
        }
      }, 500);
    }
  });
}
"use strict";

$(document).ready(function () {
  openSubMenu();
  closeInfo();
  currentTabActive();
  multiSelect();
  // checkAllcheckbox();
});
function closeInfo() {
  $(".close-info").on("click", function () {
    $(".content-single-product-bottom").toggleClass("active");
    $(".tabulation-items").toggleClass("active");
  });
}
function checkAllcheckbox(container) {
  var selectAll = container.querySelector(".select-all");
  var items = container.querySelectorAll(".item-check");

  // Si pas de selectAll, on quitte
  if (!selectAll) return;

  // Sélectionner tous
  selectAll.addEventListener("change", function () {
    var _this = this;
    items.forEach(function (item) {
      item.checked = _this.checked;
    });
  });

  // Mise à jour du "Sélectionner tous"
  items.forEach(function (item) {
    item.addEventListener("change", function () {
      selectAll.checked = Array.from(items).every(function (i) {
        return i.checked;
      });
    });
  });
}

// Initialisation
document.querySelectorAll(".listing-chexbox").forEach(function (group) {
  checkAllcheckbox(group);
});
function multiSelect() {
  $(".multi-select-dropdown").each(function () {
    var $dropdown = $(this);
    var $btn_dropdown = $dropdown.find(".btn-dropdown");
    var $selected = $dropdown.find(".dropdown-selected");
    var $options = $dropdown.find(".dropdown-options");
    var $checkboxes = $options.find("input[type=checkbox]");

    // Ouvrir / fermer dropdown
    $btn_dropdown.on("click", function (e) {
      e.stopPropagation();
      $options.toggle();
    });

    // Ouvrir / fermer dropdown
    $selected.on("click", function (e) {
      e.stopPropagation();
      $options.toggle();
    });

    // Fermer si clic en dehors
    $(document).on("click", function (e) {
      if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
        $options.hide();
      }
    });

    // Mettre à jour les éléments sélectionnés
    $checkboxes.on("change", function () {
      var selectedValues = $checkboxes.filter(":checked").map(function () {
        return $(this).val();
      }).get();
      if (selectedValues.length) {
        $selected.empty(); // on vide
        selectedValues.forEach(function (val) {
          $selected.append('<div class="selected-item">' + val + '<span class="remove-item">×</span></div>');
        });
      } else {
        $selected.text("Toutes les catégories").addClass("placeholder");
      }
    });

    // Supprimer via croix
    $selected.on("click", ".remove-item", function (e) {
      e.stopPropagation();
      var $item = $(this).parent();
      var val = $item.text().slice(0, -1); // retirer la croix
      $item.remove();
      // décocher la checkbox correspondante
      $checkboxes.filter(function () {
        return $(this).val() === val;
      }).prop("checked", false).trigger("change");
    });
  });
}
function currentTabActive() {
  $(".tabulation-items li:first").addClass("active");
  $(".tabulation-items li").on("click", function () {
    $(".tabulation-items li").removeClass("active");
    $(this).addClass("active");
  });
}
function openSubMenu() {
  $(".link-item-list-menu-nav").click(function (e) {
    // $('.sub-menu-items').removeClass('is-open')
    $(this).siblings(".sub-menu-items").toggleClass("is-open");
  });
}
"use strict";

$(document).ready(function () {
  RenderTable();
});
function RenderTable() {
  var table = document.querySelector(".custom-table");
  // Si le tableau n'existe pas, on arrête la fonction
  if (!table) return;
  var tbody = table.querySelector("tbody");
  if (!tbody) return;
  var rows = Array.from(tbody.querySelectorAll("tr"));
  var pagination = document.querySelector(".pagination");
  var info = pagination.querySelector(".info");
  var firstBtn = pagination.querySelector(".first");
  var prevBtn = pagination.querySelector(".arrow-prev");
  var nextBtn = pagination.querySelector(".arrow-next");
  var lastBtn = pagination.querySelector(".last");
  var searchInput = document.querySelector("#tableSearch");
  var rowsSelect = document.querySelector("#rowsPerPageSelect");
  var rowsPerPage = parseInt(rowsSelect.value);
  var currentPage = 1;

  // Contient les lignes filtrées (colonnes + global)
  var filteredRows = [].concat(rows);

  /** RENDU DE LA PAGINATION **/
  function renderTablePage(page) {
    var totalRows = filteredRows.length;
    var totalPages = Math.ceil(totalRows / rowsPerPage) || 1;
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;
    currentPage = page;

    // On cache toutes les lignes
    rows.forEach(function (r) {
      return r.style.display = "none";
    });

    // On affiche uniquement les lignes visibles
    var start = (page - 1) * rowsPerPage;
    var end = start + rowsPerPage;
    filteredRows.slice(start, end).forEach(function (r) {
      return r.style.display = "";
    });

    // Update info
    var startInfo = totalRows === 0 ? 0 : start + 1;
    var endInfo = Math.min(end, totalRows);
    info.textContent = "".concat(startInfo, " \xE0 ").concat(endInfo, " sur ").concat(totalRows);

    // Gestion des boutons
    firstBtn.disabled = prevBtn.disabled = page === 1;
    nextBtn.disabled = lastBtn.disabled = page === totalPages;
  }

  /** FILTRE PAR COLONNE **/
  document.querySelectorAll(".custom-table thead .filters input").forEach(function (input, colIndex) {
    input.addEventListener("keyup", function () {
      var filterValue = this.value.toLowerCase();

      // MAJ filteredRows
      filteredRows = rows.filter(function (row) {
        var cell = row.children[colIndex];
        return cell.textContent.toLowerCase().includes(filterValue);
      });
      renderTablePage(1);
    });
  });

  /** FILTRE GLOBAL **/
  searchInput.addEventListener("keyup", function () {
    var term = this.value.toLowerCase();
    filteredRows = rows.filter(function (row) {
      return Array.from(row.children).some(function (cell) {
        return cell.textContent.toLowerCase().includes(term);
      });
    });
    renderTablePage(1);
  });

  /** CHANGEMENT NOMBRE DE LIGNES **/
  rowsSelect.addEventListener("change", function () {
    rowsPerPage = parseInt(this.value);
    renderTablePage(1);
  });

  /** ÉVÈNEMENTS PAGINATION **/
  firstBtn.addEventListener("click", function () {
    return renderTablePage(1);
  });
  prevBtn.addEventListener("click", function () {
    return renderTablePage(currentPage - 1);
  });
  nextBtn.addEventListener("click", function () {
    return renderTablePage(currentPage + 1);
  });
  lastBtn.addEventListener("click", function () {
    var totalPages = Math.ceil(filteredRows.length / rowsPerPage);
    renderTablePage(totalPages);
  });

  // PREMIER RENDU
  renderTablePage(1);
}
// // Quand un utilisateur tape dans un champ de recherche
// document
//     .querySelectorAll(".custom-table thead .filters input")
//     .forEach((input, colIndex) => {
//         input.addEventListener("keyup", function () {
//             const filterValue = this.value.toLowerCase();
//             const table = this.closest("table");
//             const rows = table.querySelectorAll("tbody tr");

//             rows.forEach((row) => {
//                 const cell = row.children[colIndex];
//                 const cellText = cell.textContent.toLowerCase();
//                 // Vérifie si le texte correspond au filtre
//                 if (cellText.includes(filterValue)) {
//                     row.style.display = "";
//                 } else {
//                     row.style.display = "none";
//                 }
//             });
//         });
//     });
"use strict";
"use strict";

$(document).ready(function () {
  var $steps = $(".step");
  var $panels = $(".panel");
  var $next = $(".next");
  var $prev = $(".prev");
  var totalSteps = $steps.length;
  var currentStep = 1;

  // Barre de progression (si CSS variable)
  var progressWidths = {
    1: "25%",
    2: "52%",
    3: "100%"
  };

  // Tableau pour mémoriser les steps complétés
  var completedSteps = [];

  /** ---------- VALIDATION D'UNE ÉTAPE ---------- **/
  function isStepValid(stepIndex) {
    var $panel = $panels.filter("[data-panel=\"".concat(stepIndex, "\"]"));
    var $inputs = $panel.find("input, select, textarea");
    var valid = true;
    $panel.find(".form-group").removeClass("has-error");
    $panel.find(".text-validator").hide();
    $inputs.each(function () {
      var $input = $(this);
      var type = $input.attr("type");
      var $group = $input.closest(".form-group");
      var $error = $group.find(".text-validator");
      if (type === "radio") {
        var name = $input.attr("name");
        if (name) {
          var $groupRadios = $panel.find("input[name=\"".concat(name, "\"]"));
          if ($groupRadios.filter(":checked").length === 0) {
            var $firstGroup = $groupRadios.first().closest(".form-group");
            $firstGroup.addClass("has-error");
            $firstGroup.find(".text-validator").show();
            valid = false;
          }
        }
      } else {
        if ($input.is("[required]") && (!$input.val() || !String($input.val()).trim())) {
          $group.addClass("has-error");
          if ($error.length) $error.show();
          valid = false;
        }
      }
    });

    // Scroll vers premier champ en erreur
    if (!valid) {
      var firstInvalid = $panel.find(".has-error")[0];
      if (firstInvalid) firstInvalid.scrollIntoView({
        behavior: "smooth",
        block: "center"
      });
    }
    return valid;
  }

  /** ---------- AFFICHAGE D'UNE ÉTAPE ---------- **/
  function showStep(stepIndex) {
    // Marquer les steps précédents comme complétés
    for (var i = 1; i < stepIndex; i++) {
      if (!completedSteps.includes(i)) completedSteps.push(i);
    }

    // Mettre à jour classes des steps
    $steps.each(function () {
      var idx = $(this).data("step");
      var isActive = idx === stepIndex;
      $(this).toggleClass("active", isActive);
      $(this).toggleClass("completed", completedSteps.includes(idx));
      $(this).attr("aria-current", isActive ? "step" : false);
    });

    // Afficher / masquer panels
    $panels.each(function () {
      var isActive = $(this).data("panel") == stepIndex;
      $(this).toggleClass("active", isActive);
      $(this).attr("aria-hidden", !isActive);
    });

    // Scroll vers panel actif
    var activePanel = $panels.filter("[data-panel=\"".concat(stepIndex, "\"]"))[0];
    if (activePanel) activePanel.scrollIntoView({
      behavior: "smooth",
      block: "start"
    });

    // Prev / Next visibility
    if (stepIndex === 1) $prev.hide();else $prev.show();
    if (stepIndex === totalSteps) $next.hide();else $next.show();

    // Mise à jour barre de progression
    if ($(".stepper").length) {
      $(".stepper").css("--progress-width", progressWidths[stepIndex] || "0%");
    }
    currentStep = stepIndex;
  }

  /** ---------- CLICK SUR LES STEPS ---------- **/
  $steps.on("click", function () {
    var target = $(this).data("step");
    if (target > currentStep) {
      if (!isStepValid(currentStep)) return;
    }
    showStep(target);
  });

  /** ---------- BOUTON NEXT ---------- **/
  $next.on("click", function (e) {
    e.preventDefault();
    setTimeout(function () {
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
  $(document).on("input", "input[required], textarea[required], select[required]", function () {
    var $input = $(this);
    var $group = $input.closest(".form-group");
    var $error = $group.find(".text-validator");
    if ($input.val().trim() !== "") {
      $group.removeClass("has-error");
      $error.hide();
    }
  });
  $(document).on("blur", "input[required], textarea[required], select[required]", function () {
    var $input = $(this);
    var $group = $input.closest(".form-group");
    var $error = $group.find(".text-validator");
    if ($input.val().trim() === "") {
      $group.addClass("has-error");
      $error.show();
    } else {
      $group.removeClass("has-error");
      $error.hide();
    }
  });

  /** ---------- INIT ---------- **/
  showStep(currentStep);
  validatorInputAdd_Star_text();
});

//function pour vérifier input if is required add red star and text required
function validatorInputAdd_Star_text() {
  document.querySelectorAll("input[required], textarea[required], select[required]").forEach(function (input) {
    var parent = input.parentNode;

    // 1️⃣ Ajouter l'étoile rouge au label
    var label = parent.querySelector("label");
    if (label && !label.querySelector("span.required-star")) {
      var star = document.createElement("span");
      star.textContent = "*";
      star.className = "required-star";
      star.style.color = "red";
      star.style.marginLeft = "4px";
      star.style.fontWeight = "bold";
      label.appendChild(star);
    }

    // 2️⃣ Ajouter le span "Ce champ est obligatoire" si absent
    if (!parent.querySelector(".text-validator")) {
      var errorSpan = document.createElement("span");
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
"use strict";

$(document).ready(function () {
  setCssVariables();
});
$(window).on("load", function () {
  setCssVariables();
});
$(window).on("resize", function () {
  setCssVariables();
});
function setCssVariables() {
  var vh = window.innerHeight * 0.01;
  var breadcrumb = $(".breadcrumb-nav").innerHeight();
  var footer = $("#footer").innerHeight();
  document.documentElement.style.setProperty("--footer", "".concat(footer, "px"));
  var header = $("#header").innerHeight();
  document.documentElement.style.setProperty("--header", "".concat(header, "px"));
  document.documentElement.style.setProperty("--vh", "".concat(vh, "px"));
  document.documentElement.style.setProperty("--breadcrumb", "".concat(breadcrumb, "px"));
  var mainwrapperleft = $(".main-wrapper-left").innerWidth();
  document.documentElement.style.setProperty("--mainwrapperleft", "".concat(mainwrapperleft, "px"));
}