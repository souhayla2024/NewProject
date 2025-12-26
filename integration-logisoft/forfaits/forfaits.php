<section id="forfait-wrapper">
    <div class="center-content">
        <div class="header-section-forfait">
            <h2 class="title-section">
                <!-- <span class="picto"><img src="../build/inc/img/transport-black.svg" alt=""></span> -->
                <span class="title"> Liste des forfaits</span>
            </h2>
            <div class="group-btns">
                <!-- <button class="btn-left" type="submit">📄 Exporter</button> -->
                <button class="btn-right" type="submit"> + Nouveau forfait</button>
            </div>
        </div>


        <div class="group-section">
            <h4>Filtres de recherche avancés</h4>

            <div class="partie">
                <!-- row group -->
                <div class="row-group">
                    <div class="form-group row-5">
                        <label># N° forfait :</label>
                        <input type="text" placeholder="Ex: ...">
                    </div>

                    <div class="form-group row-5">
                        <label>Date forfait du :</label>
                        <input type="date">
                    </div>
                    <div class="form-group row-5">
                        <label>Date forfait au :</label>
                        <input type="date">
                    </div>


                    <div class="form-group row-5">
                        <label>Destination :</label>
                        <select name="" id="">
                            <option value="1">Toutes les destinations</option>
                            <option value="2">lorem 1</option>
                            <option value="3">lorem 2</option>
                        </select>
                    </div>

                    <div class="form-group row-5">
                        <label>Type :</label>
                        <select name="" id="">
                            <option value="1">Toutes les Types</option>
                            <option value="2">lorem</option>
                            <option value="3">lorem</option>
                        </select>
                    </div>

                </div>
                <div class="row-group">




                    <!-- select -->

                    <div class="form-group row-5">
                        <label>Sous pays :</label>
                        <select name="" id="">
                            <option value="1">Toutes les sous pays</option>
                            <option value="2">lorem</option>
                            <option value="3">lorem</option>
                        </select>
                    </div>
                    <!-- select -->
                    <div class="form-group row-5">
                        <label>Ville départ :</label>
                        <input type="text" placeholder="Ex: ...">
                    </div>
                    <div class="form-group row-5">
                        <label>Ville :</label>
                        <input type="text" placeholder="Ex: ...">
                    </div>

                    <div class="form-group row-5">
                        <label>Libelle :</label>
                        <select name="" id="">
                            <option value="1">Toutes les Libelles</option>
                            <option value="2">lorem</option>
                            <option value="3">lorem</option>
                        </select>
                    </div>
                    <div class="form-group row-5">
                        <label>Groupe :</label>
                        <select name="" id="">
                            <option value="1">Toutes les groupes</option>
                            <option value="2">lorem</option>
                            <option value="3">lorem</option>
                        </select>
                    </div>




                </div>
                <div class="row-group">
                    <div class="form-group row-5">
                        <label>produit :</label>
                        <input type="text" placeholder="Ex: ...">
                    </div>
                    <div class="form-group row-5">
                        <label>Réf Adpack :</label>
                        <input type="text" placeholder="Ex: ...">
                    </div>
                    <div class="form-group checkbox-group row-5">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="true" value="actif">
                            <span class="switch"></span>

                        </label>
                        <span>Cure incluse</span>
                    </div>
                    <div class="form-group checkbox-group-v2 row-3">
                        <span>Etat :</span>

                        <div class="checkbox-wrapper">
                            <input id="all" type="radio" name="stat" value="all" checked="">
                            <label for="all">Tous</label>

                        </div>
                        <div class="checkbox-wrapper">
                            <input id="open" type="radio" name="stat" value="open">
                            <label for="open">Ouvert</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input id="stop-sale" type="radio" name="stat" value="stop-sale">
                            <label for="stop-sale">Stop Sale</label>
                        </div>

                    </div>
                </div>
                <div class="row-group">

                    <button class="validate" type="submit"> <span class="loop"></span> Appliquer</button>
                    <button class="reset">Reset</button>
                </div>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="custom-table">
                <div class="header-table">
                    <div class="header-table-left">
                        <label>Afficher
                            <select id="rowsPerPageSelect">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            entrées
                        </label>
                    </div>
                    <div class="header-table-right">
                        <label for="">Rechercher :</label>
                        <input type="text" id="tableSearch" placeholder="Rechercher..." />
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>Vente N <a href="#" class="arrow-tri"></a></th>
                        <th>Référence <a href="#" class="arrow-tri"></a></th>
                        <th>Départ <a href="#" class="arrow-tri"></a></th>
                        <th>N <a href="#" class="arrow-tri"></a></th>
                        <th>J <a href="#" class="arrow-tri"></a></th>
                        <th>JO <a href="#" class="arrow-tri"></a></th>
                        <th>C<a href="#" class="arrow-tri"></a></th>
                        <th>Produits<a href="#" class="arrow-tri"></a></th>
                        <th>Hotel <a href="#" class="arrow-tri"></a></th>
                        <th>Destination<a href="#" class="arrow-tri"></a></th>
                        <th>Qota <a href="#" class="arrow-tri"></a></th>
                        <th>Vendu <a href="#" class="arrow-tri"></a></th>
                        <th>Insc <a href="#" class="arrow-tri"></a></th>
                        <th>Ville D <a href="#" class="arrow-tri"></a></th>
                        <th>Volle A <a href="#" class="arrow-tri"></a></th>
                        <th>Seq Aller <a href="#" class="arrow-tri"></a></th>
                        <th>Seq Retour <a href="#" class="arrow-tri"></a></th>
                        <th>Action </th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>14</td>
                        <td>15</td>
                        <td>DJE</td>
                        <td>C</td>
                        <td>PAR</td>
                        <td>C</td>
                        <td>TUNISIE</td>
                        <td>50</td>
                        <td>0</td>
                        <td>15</td>
                        <td>PAR</td>
                        <td>TUN</td>
                        <td>150 €</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="pagination">
                <span class="first"></span>
                <span class="arrow-prev"></span>
                <span class="info">1 to 10 of 7125</span>
                <span class="arrow-next"></span>
                <span class="last"></span>
            </div>
        </div>

    </div>
</section>
