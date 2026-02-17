<section class="bo-container">

    <!-- HEADER DOSSIER -->
    <div class="bo-header">
        <div class="bo-header-wrapper">
            <h2 class="title">Lorem ipsum</h2>
        </div>
    </div>

    <div class="bo-content-wrapper">
        <!-- Information Dossier -->
        <div class="bo-card">
            <div class="box-element">
                <div class="grid-wrapper">
                    <h3>Information Dossier</h3>
                    <!-- group 1  -->
                    <div class="bo-grid">
                        <div class="field">
                            <label>Dossier N°</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>

                        <div class="field">
                            <label>Date de création</label>
                            <input type="date" disabled>
                        </div>

                        <div class="field ">
                            <label>Vendeur</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>




                        <div class="field">
                            <label>Destination</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>
                    </div>
                    <!-- group 2  -->
                    <div class="bo-grid">
                        <div class="field">
                            <label>Libellé</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>

                        <div class="field">
                            <label>Région</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>
                    </div>
                    <!-- group 3  -->
                    <div class="bo-grid">
                        <div class="field">
                            <label>Prestation</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>
                        <div class="field">
                            <label>Date de Forfait</label>
                            <input type="date" disabled>
                        </div>
                        <div class="field">
                            <label>Jours</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>



                        <div class="field">
                            <label>Nuitées</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>
                    </div>
                    <!-- group 4  -->
                    <div class="bo-grid">
                        <div class="field">
                            <label>Ville Départ</label>
                            <input type="text" placeholder="vide.." disabled>
                        </div>
                        <div class="field">
                            <label>Date Option</label>
                            <input type="date">
                        </div>
                    </div>
                </div>

                <div class="grid-wrapper">
                    <h3>Information client</h3>

                    <div class="bo-grid">
                        <div class="field row-4">
                            <label>Client</label>
                            <input type="text" placeholder="vide..." disabled>
                        </div>

                        <div class="field row-1">
                            <label>Nom</label>
                            <input type="text" placeholder="vide..." disabled>
                        </div>

                        <div class="field required">
                            <label>Email</label>
                            <input type="email" placeholder="vide..." disabled>
                        </div>

                        <div class="field">
                            <label>Téléphone</label>
                            <input type="tel" placeholder="vide..." disabled>
                        </div>



                        <div class="field row-0">
                            <label>Adresse</label>
                            <input type="text" placeholder="vide..." disabled>
                        </div>

                        <div class="field">
                            <label>Ville</label>
                            <input type="text" placeholder="vide..." disabled>
                        </div>

                        <div class="field">
                            <label>Code postal</label>
                            <input type="text" placeholder="vide..." disabled>
                        </div>



                    </div>
                    <div class="bo-grid">
                        <div class="field">
                            <label>Vos Réf</label>
                            <input type="text" placeholder="Vos Réf ...">
                        </div>
                        <div class="field">
                            <label>Nos Réf</label>
                            <input type="text" placeholder="Nos Réf ...">
                        </div>
                    </div>
                </div>

                <!-- pax / dissier -->
                <div class="pax-summary">
                    <h4>Pax / Dossier</h4>

                    <!-- TOTAL PAX DOSSIER -->
                    <div class="pax-line">
                        <label for="paxDossier">Total Pax</label>
                        <input type="number" id="paxDossier" value="0" disabled>
                    </div>

                    <!-- TOTAL ADULTES -->
                    <div class="pax-line">
                        <label for="totalAdultes">Adultes</label>
                        <input type="number" id="totalAdultes" value="0" disabled>
                    </div>

                    <!-- TOTAL ENFANTS -->
                    <div class="pax-line">
                        <label for="totalEnfants">Enfants</label>
                        <input type="number" id="totalEnfants" value="0" disabled>
                    </div>

                    <!-- TOTAL BÉBÉS -->
                    <div class="pax-line">
                        <label for="totalBebes">Bébés</label>
                        <input type="number" id="totalBebes" value="0" disabled>
                    </div>
                </div>
            </div>
        </div>


        <!-- CHAMBRES -->
        <div class="bo-card">
            <h3>Chambres & Prestations</h3>
            <table class="bo-table" id="roomTable">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Catégorie</th>
                        <th>Début</th>
                        <th>Fin</th>
                        <th>Qté</th>
                        <th>Occupation</th>
                        <th>Adulte(s)</th>
                        <th>Enfant(s)</th>
                        <th>Bébé(s)</th>
                        <th>Prestation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les lignes ajoutées par le JS apparaîtront ici -->
                </tbody>
            </table>
        </div>
        <!-- Ligne d'insertion -->
        <div class="bo-card-wrapper">
            <h3>Ajouter une chambre</h3>
            <div class="bo-grid">

                <div class=" field">
                    <label for="code">Code</label>
                    <input type="text" placeholder="Code" id="code">
                </div>

                <div class="field">
                    <label for="categorie">Catégorie</label>
                    <select id="categorie">
                        <option>Vue sur mer</option>
                        <option>Vue jardin</option>
                        <option>Suite</option>
                    </select>
                </div>

                <div class="field">
                    <label for="debut">Début</label>
                    <input type="date" id="debut">
                </div>

                <div class="field">
                    <label for="fin">Fin</label>
                    <input type="date" id="fin">
                </div>

                <div class="field row-12">
                    <label for="qte">Quantité</label>
                    <input type="number" id="qte" value="1">
                </div>

                <div class="field">
                    <label for="occupation">Occupation</label>
                    <select id="occupation">
                        <option value="1">Single</option>
                        <option value="2">Double</option>
                        <option value="4">Quadrable</option>
                    </select>
                </div>

                <div class="field">
                    <label for="adulte">Adultes</label>
                    <select id="adulte"></select>
                </div>

                <div class="field">
                    <label for="enfant">Enfants</label>
                    <select id="enfant"></select>
                </div>

                <div class="field">
                    <label for="bebe">Bébés</label>
                    <select id="bebe"></select>
                </div>

                <div class="field">
                    <label for="prestation">Prestation</label>
                    <select id="prestation">
                        <option>All inclusive</option>
                        <option>Demi pension</option>
                        <option>LPD</option>
                    </select>
                </div>



            </div>
            <div class="field btn">
                <button class="btn-ad-element" id="btnAddRoom">Ajouter</button>
            </div>
        </div>

        <!-- Tableau Les détails -->
        <div class="bo-card">
            <h3>Les détails</h3>

            <table class="bo-table" id="occupantsTable">
                <thead>
                    <tr>
                        <th>Chambre</th>
                        <th>Genre</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Ass</th>
                        <th>D.Naiss</th>
                        <th>Cure</th>
                        <th>BG</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Les lignes ajoutées par le JS apparaîtront ici -->
                </tbody>
            </table>
        </div>


        <!-- COMMENTAIRES -->
        <div class="bo-card bo-comments">
            <h3>Les Commentaires</h3>
            <div class="comments-grid">
                <div class="field">
                    <label>Commentaire interne</label>
                    <textarea></textarea>
                </div>
                <div class="field">
                    <label>Commentaire hôtel (visible voucher)</label>
                    <textarea></textarea>
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
                <span class="btn-call-to-action btn-open-modal">Détail</span>

                <button class="submit" type="submit">Enregistrer</button>
            </div>
        </div>
    </div>

    <?php include '../modal-popup/modal-popup-f2.php'; ?>
</section>
