<!-- liste case a coché -->
<div class="form-group listing-chexbox">
  <div class="select-all-item">
    <label>
      <span>Jours d'opération :</span>
      <input type="checkbox" class="select-all"> Sélectionner tous
    </label>
  </div>
  <div class="items">
    <label>
      <input type="checkbox" class="item-check" value="lundi"> Lundi
    </label>
    <label>
      <input type="checkbox" class="item-check" value="mardi"> Mardi
    </label>
    <label>
      <input type="checkbox" class="item-check" value="mercredi"> Mercredi
    </label>
    <label>
      <input type="checkbox" class="item-check" value="jeudi"> Jeudi
    </label>
    <label>
      <input type="checkbox" class="item-check" value="vendredi"> Vendredi
    </label>
    <label>
      <input type="checkbox" class="item-check" value="samedi"> Samedi
    </label>
  </div>
</div>

<!-- select -->
<div class="form-group row-6">
  <label>Categorie de chambre :</label>
  <select name="" id="">
    <option value="1">lorem</option>
    <option value="2">lorem</option>
    <option value="3">lorem</option>
  </select>
</div>

<!-- checkBox -->

<div class="form-group checkbox-group row-3">
  <span>Sales & Report :</span>
  <div class="checkbox-wrapper">
    <input id="sales-actif" type="radio" name="sales" value="actif"> <label for="sales-actif">Actif</label>
  </div>

  <div class="checkbox-wrapper">
    <input id="sales-inactif" type="radio" name="sales" value="inactif"> <label for="sales-inactif">Inactif</label>
  </div>
</div>


<!-- Multi Select -->

<div class="form-group multi-select">
  <div class="form-group-content">
    <label>Categories de chambre</label>
    <div class="multi-select-dropdown">
      <span class="btn-dropdown"></span>
      <div class="dropdown-selected">Toutes les catégories</div>

      <div class="dropdown-options">
        <label><input type="checkbox" value="Categorie 1"> Categorie 1</label>
        <label><input type="checkbox" value="Categorie 2"> Categorie 2</label>
        <label><input type="checkbox" value="Categorie 3"> Categorie 3</label>
        <label><input type="checkbox" value="Categorie 4"> Categorie 4</label>
        <label><input type="checkbox" value="Categorie 5"> Categorie 5</label>
        <label><input type="checkbox" value="Categorie 6"> Categorie 6</label>
        <label><input type="checkbox" value="Categorie 7"> Categorie 7</label>
      </div>
    </div>
  </div>
  <div class="form-group-btn-submit">
    <span class="loop"></span>
    <span class="btn-submit">Rechercher</span>
  </div>
</div>
