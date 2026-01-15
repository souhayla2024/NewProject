<section id="vol-wrapper">
    <div class="center-content">
        <div class="header-section-vol">
            <h2 class="title-section">
                <span class="picto"><img src="../build/inc/img/transport-black.svg" alt=""></span>
                <span class="title"> Liste des Vols</span>
            </h2>
            <div class="group-btns">
                <!-- <button class="btn-left" type="submit">📄 Exporter</button> -->
                <button class="btn-right" type="submit"> + Nouveau Vol</button>
            </div>
        </div>


        <div class="group-section">
            <h4>Filtres de recherche avancés</h4>

            <div class="partie">
                <!-- row group -->
                <div class="row-group">
                    <div class="form-group row-5">
                        <label>Séquence :</label>
                        <input type="text" placeholder="Ex: 1234">
                    </div>
                    <div class="form-group row-5">
                        <label># N° Vol :</label>
                        <input type="text" placeholder="Ex: AF123">
                    </div>
                    <!-- select -->
                    <div class="form-group row-5">
                        <label>Compagnie :</label>
                        <select name="" id="">
                            <option value="1">Toutes les compagnies</option>
                            <option value="2">lorem</option>
                            <option value="3">lorem</option>
                        </select>
                    </div>
                    <div class="form-group checkbox-group row-3">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="true" value="actif">
                            <span class="switch"></span>

                        </label>
                        <span>Uniquement vols garantis</span>
                    </div>

                </div>
                <div class="row-group">
                    <div class="form-group row-5">
                        <label>Date vol du :</label>
                        <input type="date">
                    </div>
                    <div class="form-group row-5">
                        <label>Date vol au :</label>
                        <input type="date">
                    </div>
                    <!-- select -->
                    <div class="form-group row-5">
                        <label>Destination :</label>
                        <select name="" id="">
                            <option value="1">Toutes les destinations</option>
                            <option value="2">lorem 1</option>
                            <option value="3">lorem 2</option>
                        </select>
                    </div>
                    <button class="validate" type="submit"> <span class="loop"></span>
                        Appliquer</button>
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
                        <th># <a href="#" class="arrow-tri"></a></th>
                        <th>Numéro <a href="#" class="arrow-tri"></a></th>
                        <th>Date <a href="#" class="arrow-tri"></a></th>
                        <th>JO <a href="#" class="arrow-tri"></a></th>
                        <th>Destination <a href="#" class="arrow-tri"></a></th>
                        <th>Ville D <a href="#" class="arrow-tri"></a></th>
                        <th>Heure D <a href="#" class="arrow-tri"></a></th>
                        <th>Ville A <a href="#" class="arrow-tri"></a></th>
                        <th>Heure A <a href="#" class="arrow-tri"></a></th>
                        <th>Ville Via <a href="#" class="arrow-tri"></a></th>
                        <th>Type <a href="#" class="arrow-tri"></a></th>
                        <th>Compagnie <a href="#" class="arrow-tri"></a></th>
                        <th>Ouvert <a href="#" class="arrow-tri"></a></th>
                        <th>Vendu <a href="#" class="arrow-tri"></a></th>
                        <th>Réservé <a href="#" class="arrow-tri"></a></th>
                        <th>Prix <a href="#" class="arrow-tri"></a></th>
                        <th>Action </th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>658</td>
                        <td>mk 1023</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
                        <td>150 €</td>

                        <td class="actions">
                            <button class="view" title="Visualiser"></button>
                            <button class="delete" title="Supprimer"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>MH999</td>
                        <td>13/10/2025</td>
                        <td>1</td>
                        <td>FRANCE</td>
                        <td>DJE</td>
                        <td>13:15:00</td>
                        <td>PAR</td>
                        <td>13:15:00</td>
                        <td>DJE</td>
                        <td>Aller</td>
                        <td>AIR FRANCE</td>
                        <td>15</td>
                        <td>0</td>
                        <td>0</td>
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
