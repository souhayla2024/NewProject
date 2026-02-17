<section class="bo-container">

    <!-- HEADER DOSSIER -->
    <div class="bo-header">
        <div class="bo-header-wrapper">
            <h2 class="title">Lorem ipsum</h2>
        </div>
    </div>

    <div class="bo-content-wrapper">



        <!-- wrapper 1 -->
        <div class="bo-card">
            <h3>Table</h3>
            <table class="bo-table" id="calcTable">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Libellè</th>
                        <th>Com</th>
                        <th>Prix</th>
                        <th>Qté</th>
                        <th>total</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>h125</td>
                        <td>Forfait Adulte - Chambre standard triple N°1</td>
                        <td>0.00</td>
                        <td>392.00</td>
                        <td>2</td>
                        <td>784.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Ligne d'insertion -->
        <div class="bo-card-wrapper">
            <h3>Ajouter une Ligne</h3>
            <div class="bo-grid">

                <div class=" field">
                    <label for="code">Code</label>
                    <input type="text" placeholder="Code" id="code">
                </div>

                <div class="field">
                    <label for="lib">Libellè</label>
                    <input id="lib" type="text" placeholder="Forfait lorem ipsum ...">
                </div>

                <div class="field">
                    <label for="Com">Commission</label>
                    <input id="Com" type="text">
                </div>

                <div class="field">
                    <label for="Price">Prix</label>
                    <input id="price" type="text">
                </div>

                <div class="field row-12">
                    <label for="qte">Quantité</label>
                    <input type="number" id="qte" value="1">
                </div>



                <div class="field">
                    <label for="total">Total</label>
                    <input id="total" type="text">
                </div>

            </div>
            <div class="field btn">
                <button class="btn-ad-element" id="btnAddCalc">Ajouter</button>
            </div>
        </div>


        <!-- wrapper 3 -->
        <div class="bo-card">
            <h3>Résult</h3>
            <div class="group-calc-wrapper">
                <div class="calc-wrapper">

                    <div class="calc-row">
                        <div class="label">Total Brut</div>
                        <div class="row-label">
                            <input type="text" value="1451.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Commission</div>
                        <div class="row-label">

                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Sous-total Net H.T</div>
                        <div class="row-label">

                            <input type="text" value="1451.00" readonly>
                        </div>
                    </div>

                    <hr>

                    <div class="calc-row">
                        <div class="label">Taxe Aéroport, carburant et frais de dossier</div>
                        <div class="row-label">
                            <input type="text" value="150.00" readonly>
                            <input type="number" value="1">
                            <input type="text" value="600.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Assurance</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                            <input type="number" value="1" readonly>
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Carte touristique</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                            <input type="number" value="1" readonly>
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Taxe Solidarité</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                            <input type="number" value="1" readonly>
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row">
                        <div class="label">Autre Taxe</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                            <input type="number" value="1" readonly>
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                    <!-- Assurance détaillée -->


                </div>
                <div class="calc-wrapper">



                    <!-- Assurance détaillée -->
                    <div class="calc-row">
                        <div class="label">Assurance</div>
                        <div class="row-label">
                            <select name="select-option">
                                <option value="select-option-1">lorem ipsum</option>
                                <option value="select-option-2">lorem ipsum</option>
                                <option value="select-option-3">lorem ipsum</option>
                            </select>
                        </div>

                    </div>
                    <div class="calc-row">
                        <div class="label">Montant</div>
                        <div class="row-label">
                            <input type="text" value="0.00">
                            <input type="number" value="1" readonly>
                            <input type="text" value="0.00" readonly>

                        </div>
                    </div>
                    <div class="calc-row">
                        <div class="label">Date souscription assurance</div>
                        <div class="row-label">
                            <input type="date">
                        </div>
                    </div>

                    <hr>

                    <div class="calc-row ">
                        <div class="label">Prix total client</div>
                        <div class="row-label">
                            <input type="text" value="2 051.00" readonly>
                        </div>
                    </div>

                    <div class="calc-row ">
                        <div class="label">Net à payer</div>
                        <div class="row-label">
                            <input type="text" value="2 051.00" readonly>
                        </div>
                    </div>
                    <div class="calc-row ">
                        <div class="label">Réglé</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>
                    <div class="calc-row ">
                        <div class="label">Reste à payer</div>
                        <div class="row-label">
                            <input type="text" value="0.00" readonly>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>

    <div class="bo-footer-wrapper">
        <div class="footer-submit">
            <div class="footer-part-left">
                <button class="reset" type="reset">Annuler</button>
            </div>
            <div class="footer-part-right">
                <button class="submit" type="submit">Enregistrer</button>
            </div>
        </div>
    </div>

</section>
