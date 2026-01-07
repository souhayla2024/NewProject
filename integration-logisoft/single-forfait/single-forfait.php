<section class="single-forfait">

    <!-- HEADER -->
    <div class="forfait-header">
        <div class="header-forfait-top">
            <h2 class="title-forfait">Forfait Étranger</h2>
            <span class="sub-title-forfait">Produit : GOLDEN TULIP LE PRESIDENT VF</span>
        </div>


        <div class="group-btns">
            <button class="btn btn-white">Suivi</button>
            <button class="btn btn-darkblue">Mettre à jour</button>
            <button class="btn btn-danger">STOP SALE</button>

        </div>
    </div>

    <!-- CONTAINER -->
    <div class="forfait-container">

        <!-- LAYOUT 2 COLONNES -->
        <div class="forfait-layout">
            <!-- ================== COLONNE GAUCHE ================== -->
            <!-- INFOS GÉNÉRALES -->
            <div class="card">

                <div class="card-wrapper">
                    <h2 class="card-header">Informations générales</h2>

                    <div class="card-grid">
                        <div>
                            <label>Code de l'hôtel</label>
                            <input type="text" value="H588" required>
                        </div>
                        <div>
                            <label>Produits</label>
                            <input value="GOLDEN TULIP LE PRESIDENT VF - ALL INCLUSIVE">
                        </div>

                        <div>
                            <label>Pays destination</label>
                            <input value="TUNISIE">
                        </div>

                        <div>
                            <label>Sous-pays</label>
                            <select class="bo-select">
                                <option value="">— Sélectionner —</option>
                                <option value="NABEUL_HAMMAMET" selected>Nabeul / Hammamet</option>
                                <option value="SOUSSE">Sousse</option>
                                <option value="MONASTIR">Monastir</option>
                                <option value="DJERBA">Djerba</option>
                                <option value="TUNIS">Tunis</option>
                                <option value="MAHDIA">Mahdia</option>
                                <option value="TOZEUR">Tozeur</option>
                            </select>
                        </div>



                        <div>
                            <label>Type</label>
                            <select class="bo-select">
                                <option value="">— Sélectionner —</option>
                                <option value="HOTEL" selected>Hôtel</option>
                                <option value="RESORT">Resort</option>
                                <option value="APPART_HOTEL">Appart-Hôtel</option>
                                <option value="MAISON_DHOTES">Maison d’hôtes</option>
                                <option value="CLUB">Club</option>
                            </select>
                        </div>

                        <div>
                            <label>J. Op</label>
                            <input value="5">
                        </div>

                        <div>
                            <label>Prestation</label>
                            <select class="bo-select">
                                <option value="">— Sélectionner —</option>
                                <option value="all_inclusive" selected>ALL INCLUSIVE</option>
                                <option value="Demi_pension">Demi pension</option>
                                <option value="Pension_Compléte">Pension Compléte</option>

                            </select>
                        </div>

                        <div>
                            <label>Forfait Internet</label>
                            <input value="GOLDEN TULIP LE PRESIDENT VF - ALL INCLUSIVE">
                        </div>

                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-grid ">
                        <div>
                            <label>Fournisseur des cures</label>
                            <input value="E259">
                        </div>
                        <div>
                            <label>lorem ipsum</label>
                            <input value="GOLDEN TULIP PRESIDENT">
                        </div>



                    </div>
                    <div class="card-grid full-width">


                        <div class="btn-radio-group">
                            <span class="cure-title">Type des cures</span>

                            <label>
                                <input type="radio" name="cure" checked>
                                Cure unique
                            </label>

                            <label>
                                <input type="radio" name="cure">
                                Cure de rechange
                            </label>

                            <label>
                                <input type="radio" name="cure">
                                Cure au choix
                            </label>
                        </div>


                    </div>
                </div>

            </div>
            <!-- ================== COLONNE DROITE ================== -->
            <!-- QUOTA / DATES -->
            <div class="card">
                <div class="card-wrapper">

                    <h2 class="card-header">Gestion & Période</h2>

                    <!-- STATS -->
                    <div class="stats">
                        <div class="badge badge-info">Quota : <input type="number" name="qota" id="qota" value="50"></div>
                        <div class="badge badge-success">Inscrit : <input type="number" name="inscrit" id="inscrit" value="25"></div>
                        <div class="badge badge-warning">Vendu : <input type="number" name="Vendu" id="Vendu" value="25"></div>
                    </div>
                </div>

                <!-- DATES -->
                <div class="card-wrapper">

                    <div class="card-grid card-grid-2">
                        <div>
                            <label>Réf Orchestra</label>
                            <input type="text" placeholder="EX:1394...">
                        </div>
                        <div>
                            <label>Forfait N°</label>
                            <input type="text" placeholder="EX:123456...">
                        </div>
                        <div>
                            <label>Départ</label>
                            <input type="date" value="2025-12-05">
                        </div>

                        <div>
                            <label>Fin</label>
                            <input type="date">
                        </div>

                        <div>
                            <label>Nb nuitées</label>
                            <input type="number" value="3">
                        </div>

                        <div>
                            <label>Nb jours</label>
                            <input type="number" value="4">
                        </div>
                    </div>

                </div>
                <!-- JOURS D'OPÉRATION -->
                <div class="operation-days">
                    <span class="operation-title">Jour(s) d’opération</span>

                    <!-- TOUS LES JOURS -->
                    <label class="select-all-days">
                        Tous les jours
                        <input type="checkbox" id="selectAllDays">

                    </label>

                    <div class="days-list">
                        <label><input type="checkbox" class="day-checkbox" checked> Lun</label>
                        <label><input type="checkbox" class="day-checkbox"> Mar</label>
                        <label><input type="checkbox" class="day-checkbox"> Mer</label>
                        <label><input type="checkbox" class="day-checkbox"> Jeu</label>
                        <label><input type="checkbox" class="day-checkbox"> Ven</label>
                        <label><input type="checkbox" class="day-checkbox"> Sam</label>
                        <label><input type="checkbox" class="day-checkbox"> Dim</label>
                    </div>
                </div>

            </div>



        </div>
        <div class="forfait-layout">

            <!-- TABLE Flight -->
            <div class="card flight-section">

                <div class="card-header">Détails des vols</div>

                <div class="flight-table-wrapper">
                    <table class="flight-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Date</th>
                                <th>Séq vol</th>
                                <th>Départ</th>
                                <th>Heure</th>
                                <th>Arrivée</th>
                                <th>Heure</th>
                                <th>Vol N°</th>
                                <th>Prix AD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="row-title">Départ</td>
                                <td><input type="date" value="2025-12-05"></td>
                                <td><input value="165812"></td>
                                <td><input value="PAR"></td>
                                <td><input value="1935"></td>
                                <td><input value="TUN"></td>
                                <td><input value="2205"></td>
                                <td><input value="BJ521"></td>
                                <td><input value="116.00"></td>
                            </tr>

                            <tr>
                                <td class="row-title">Retour</td>
                                <td><input type="date" value="2025-12-08"></td>
                                <td><input value="165684"></td>
                                <td><input value="TUN"></td>
                                <td><input value="1600"></td>
                                <td><input value="PAR"></td>
                                <td><input value="1835"></td>
                                <td><input value="BJ520"></td>
                                <td><input value="47.00"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>

            <div class="card">
                <div class="card-header">Catégories chambres</div>

                <table class="forfait-table">
                    <thead>
                        <tr>
                            <th>Chambre</th>
                            <th>Adulte</th>
                            <th>1er Enf</th>
                            <th>2eme Enf</th>
                            <th>Sup. Single</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Standard</td>
                            <td>126.30</td>
                            <td>84.70</td>
                            <td>84.70</td>
                            <td>45.00</td>
                        </tr>
                        <tr>
                            <td>Vue Mer</td>
                            <td>137.50</td>
                            <td>90.30</td>
                            <td>90.30</td>
                            <td>45.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
        <div class="forfait-layout">
            <div class="card">
                <div class="card-header">Détails forfait</div>

                <div class="details-table-wrapper">
                    <table class="details-table" id="detailsTable">
                        <thead>
                            <tr>
                                <th>T</th>
                                <th>Code</th>
                                <th>Libellé</th>
                                <th>Nuitée</th>
                                <th>Entrée</th>
                                <th>Sortie</th>
                                <th>Prix d'achat</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- Lignes ajoutées dynamiquement -->
                        </tbody>

                        <!-- LIGNE DE SAISIE -->
                        <tfoot>
                            <tr class="input-row">
                                <td>
                                    <select id="type">
                                        <option>H</option>
                                        <option>T</option>
                                    </select>
                                </td>
                                <td><input id="code" placeholder="H588"></td>
                                <td><input id="libelle" placeholder="LE PRESIDENT HOTEL ALL IN"></td>
                                <td><input id="nuitee" type="number" value="3"></td>
                                <td><input id="entree" type="date"></td>
                                <td><input id="sortie" type="date"></td>
                                <td><input id="prix" type="number" step="0.01"></td>
                                <td>
                                    <button class="btn-add" id="addRow">+</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Option forfait</div>

                <div class="details-table-wrapper">
                    <table class="details-table" id="priceTable">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Nom</th>
                                <th>Prix de vente</th>
                                <th>À appliquer</th>
                                <th>Prix / durée</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- lignes dynamiques -->
                        </tbody>

                        <tfoot>
                            <tr class="input-row">
                                <td><input id="p_code" placeholder="P001"></td>
                                <td><input id="p_nom" placeholder="Forfait été"></td>
                                <td><input id="p_prix_vente" type="number" step="0.01"></td>
                                <td>
                                    <select id="p_apply">
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                </td>
                                <td><input id="p_prix_duree" type="number" step="0.01"></td>
                                <td>
                                    <button id="addPriceRow" class="btn-add">+</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>


        <!-- btn's -->
        <div class="forfait-layout">
            <div class="footer-submit">
                <div class="footer-part-left">
                    <button class="reset" type="reset">Annuler</button>
                </div>
                <div class="footer-part-right">
                    <button class="submit" type="submit">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

</section>
