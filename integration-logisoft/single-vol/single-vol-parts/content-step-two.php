<div class="content-step">
  <div class="continer-step">
    <h2 class="title-continer">Tarification</h2>
    <div class="group-section">

      <div class="partie">
        <!-- table Tarification -->
        <div class="pricing-container">
          <!-- Main Pricing Table -->
          <table class="pricing-table">
            <thead>
              <tr class="pricing-table__header">
                <th>Tarification</th>
                <th>Adulte</th>
                <th>Enfant</th>
                <th>Bébé</th>
                <th>Taxe</th>
              </tr>
            </thead>
            <tbody>
              <!-- Achat forfait -->
              <tr class="pricing-table__row">
                <td class="pricing-table__label pricing-table__label--subtle">Achat forfait</td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="150" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="150" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
              </tr>

              <!-- Achat vol sec -->
              <tr class="pricing-table__row">
                <td class="pricing-table__label pricing-table__label--subtle">Achat vol sec</td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell pricing-table__cell--empty"> </td>
              </tr>

              <!-- Prix vente section -->
              <tr>
                <td rowspan="3" class="pricing-table__label pricing-table__label--merged">Prix vente</td>
                <td class="pricing-table__label">Forfait</td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td rowspan="4" class="pricing-table__cell">
                  <span class="title-cell">Yield:</span>
                  <input type="text" class="pricing-table__input" value="0" />
                </td>
              </tr>

              <tr>
                <td class="pricing-table__label">Internet</td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell pricing-table__cell--empty"></td>
              </tr>

              <tr>
                <td class="pricing-table__label">Vol sec</td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell"><input type="text" class="pricing-table__input" value="0" /></td>
                <td class="pricing-table__cell pricing-table__cell--empty"></td>
              </tr>
            </tbody>
          </table>

          <!-- Taxes Side Panel -->
          <div class="taxes-panel">
            <div class="taxes-panel__header">
              <h3>Taxes & Suppléments</h3>
            </div>
            <div class="taxes-panel__content">
              <table class="taxes-panel__table">
                <tbody>
                  <tr>
                    <td class="taxes-panel__label">Taxe aéroport</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                  <tr>
                    <td class="taxes-panel__label">Carte touristique</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                  <tr>
                    <td class="taxes-panel__label">Taxe de sortie</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                  <tr>
                    <td class="taxes-panel__label">Supp. 15 jours</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                  <tr>
                    <td class="taxes-panel__label">Supplém. AS</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                  <tr>
                    <td class="taxes-panel__label">Supplém. AR</td>
                    <td class="taxes-panel__input-cell"><input type="text" class="taxes-panel__input" value="0" /></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


      </div>


    </div>
  </div>
  <div class="continer-step">
    <h2 class="title-continer">Bagages</h2>
    <div class="group-section">


      <div class="partie">
        <!-- row group -->
        <div class="row-group">
          <div class="form-group row-3">
            <label>N° Séq:</label>
            <input type="text" placeholder="Ex: 1234">
          </div>
          <div class="form-group row-3">
            <label>N° du vol :</label>
            <input type="text" placeholder="Ex: 1234">
          </div>

          <div class="form-group row-3">
            <label>N° du vol :</label>
            <input type="text" placeholder="Ex: 1234" required>
          </div>


          <!-- row group -->
        </div>
      </div>
    </div>
  </div>

</div>
