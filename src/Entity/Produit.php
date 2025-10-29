<?php

namespace App\Entity;
use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[ORM\Table(name: 'PRODUIT')]
#[ORM\UniqueConstraint(name: 'IX_PRODUIT', columns: ['CODEPROD'])]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'SEQPROD', type: Types::INTEGER)]
    private ?int $seqprod = null;

    #[ORM\Column(name: 'CODEPROD', type: Types::STRING, length: 6, options: ['default' => ''])]
    private string $codeprod = '';

    #[ORM\Column(name: 'LIBPROD', type: Types::STRING, length: 80, options: ['default' => ''])]
    private string $libprod = '';

    #[ORM\Column(name: 'LIBPROD2', type: Types::STRING, length: 70, options: ['default' => ''])]
    private string $libprod2 = '';

    #[ORM\Column(name: 'LIBTYPEPROD', type: Types::STRING, length: 20, options: ['default' => ''])]
    private string $libtypeprod = '';

    #[ORM\Column(name: 'TYPEPRODUIT', type: Types::INTEGER, options: ['default' => 1])]
    private int $typeproduit = 1;

    #[ORM\Column(name: 'LIBGROUPE', type: Types::STRING, length: 20, options: ['default' => ''])]
    private string $libgroupe = '';

    #[ORM\Column(name: 'ADRESSE', type: Types::STRING, length: 100, options: ['default' => ''])]
    private string $adresse = '';

    #[ORM\Column(name: 'CP', type: Types::STRING, length: 10, options: ['default' => ''])]
    private string $cp = '';

    #[ORM\Column(name: 'LIBVILLE', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $libville = '';

    #[ORM\Column(name: 'LIBPAYS', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $libpays = '';

    #[ORM\Column(name: 'PATRON', type: Types::STRING, length: 20, options: ['default' => ''])]
    private string $patron = '';

    #[ORM\Column(name: 'EMAIL', type: Types::STRING, length: 150, options: ['default' => ''])]
    private string $email = '';

    #[ORM\Column(name: 'EMAIL2', type: Types::STRING, length: 150, options: ['default' => ''])]
    private string $email2 = '';

    #[ORM\Column(name: 'TEL1', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $tel1 = '';

    #[ORM\Column(name: 'TEL2', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $tel2 = '';

    #[ORM\Column(name: 'FAXHOTEL', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $faxhotel = '';

    #[ORM\Column(name: 'FAXRESA', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $faxresa = '';

    #[ORM\Column(name: 'LIBMONNAIE', type: Types::STRING, length: 3, options: ['default' => ''])]
    private string $libmonnaie = '';

    #[ORM\Column(name: 'LIBPREST', type: Types::STRING, length: 80, options: ['default' => ''])]
    private string $libprest = '';

    #[ORM\Column(name: 'VENDABLE', type: Types::INTEGER, options: ['default' => 0])]
    private int $vendable = 0;

    #[ORM\Column(name: 'SANSPRIX', type: Types::INTEGER, options: ['default' => 0])]
    private int $sansprix = 0;

    #[ORM\Column(name: 'NOMRECEPTIF', type: Types::STRING, length: 35, options: ['default' => ''])]
    private string $nomreceptif = '';

    #[ORM\Column(name: 'CHAMBRE1', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre1 = 0;

    #[ORM\Column(name: 'CHAMBRE2', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre2 = 0;

    #[ORM\Column(name: 'CHAMBRE3', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre3 = 0;

    #[ORM\Column(name: 'CHAMBRE4', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre4 = 0;

    #[ORM\Column(name: 'CHAMBRE5', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre5 = 0;

    #[ORM\Column(name: 'CHAMBRE6', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre6 = 0;

    #[ORM\Column(name: 'CHAMBRE7', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre7 = 0;

    #[ORM\Column(name: 'TRANSFERT', type: Types::INTEGER, options: ['default' => 0])]
    private int $transfert = 0;

    #[ORM\Column(name: 'LOCATION', type: Types::INTEGER, options: ['default' => 0])]
    private int $location = 0;

    #[ORM\Column(name: 'CONTRAT', type: Types::INTEGER, options: ['default' => 0])]
    private int $contrat = 0;

    #[ORM\Column(name: 'SEQFOUR', type: Types::STRING, length: 6, options: ['default' => ''])]
    private string $seqfour = '';

    #[ORM\Column(name: 'NOMFOUR', type: Types::STRING, length: 40, options: ['default' => ''])]
    private string $nomfour = '';

    #[ORM\Column(name: 'CEE', type: Types::INTEGER, options: ['default' => 0])]
    private int $cee = 0;

    #[ORM\Column(name: 'OBS', type: Types::TEXT, options: ['default' => ''])]
    private string $obs = '';

    #[ORM\Column(name: 'AGEENFANT1', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant1 = '';

    #[ORM\Column(name: 'AGEENFANT2', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant2 = '';

    #[ORM\Column(name: 'AGEENFANT3', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant3 = '';

    #[ORM\Column(name: 'confirmation', type: Types::DECIMAL, precision: 7, scale: 2, options: ['default' => 0])]
    private string $confirmation = '0';

    #[ORM\Column(name: 'CCOMPTA', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ccompta = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE1', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre1 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE2', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre2 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE3', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre3 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE4', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre4 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE5', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre5 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE6', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre6 = '';

    #[ORM\Column(name: 'LIBTYPECHAMBRE7', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre7 = '';

    #[ORM\Column(name: 'CAPACITE6', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite6 = 0;

    #[ORM\Column(name: 'CAPACITE7', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite7 = 0;

    #[ORM\Column(name: 'AGEENFANT1DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant1de = 0;

    #[ORM\Column(name: 'AGEENFANT2DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant2de = 0;

    #[ORM\Column(name: 'AGEENFANT3DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant3de = 0;

    #[ORM\Column(name: 'AGEENFANT1A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant1a = 0;

    #[ORM\Column(name: 'AGEENFANT2A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant2a = 0;

    #[ORM\Column(name: 'AGEENFANT3A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant3a = 0;

    #[ORM\Column(name: 'ENFANTGRATUIT', type: Types::INTEGER, options: ['default' => 0])]
    private int $enfantgratuit = 0;

    #[ORM\Column(name: 'MARGE', type: Types::INTEGER, options: ['default' => 0])]
    private int $marge = 0;

    #[ORM\Column(name: 'SEPARER', type: Types::INTEGER, options: ['default' => 0])]
    private int $separer = 0;

    #[ORM\Column(name: 'ATTENTE', type: Types::INTEGER, options: ['default' => 0])]
    private int $attente = 0;

    #[ORM\Column(name: 'envoi', type: Types::INTEGER, options: ['default' => 0])]
    private int $envoi = 0;

    #[ORM\Column(name: 'ARCHIVER', type: Types::INTEGER, options: ['default' => 0])]
    private int $archiver = 0;

    #[ORM\Column(name: 'AERO1', type: Types::STRING, length: 3, options: ['default' => ''])]
    private string $aero1 = '';

    #[ORM\Column(name: 'AERO2', type: Types::STRING, length: 3, options: ['default' => ''])]
    private string $aero2 = '';

    #[ORM\Column(name: 'AERO3', type: Types::STRING, length: 3, options: ['default' => ''])]
    private string $aero3 = '';

    #[ORM\Column(name: 'FREESALE', type: Types::INTEGER, options: ['default' => 0])]
    private int $freesale = 0;

    #[ORM\Column(name: 'STATUT_VENTE', type: Types::INTEGER, options: ['default' => 0])]
    private int $statutVente = 0;

    #[ORM\Column(name: 'TPLADULTE', type: Types::INTEGER, options: ['default' => 0])]
    private int $tpladulte = 0;

    #[ORM\Column(name: 'CODECURISTE', type: Types::STRING, length: 5, options: ['default' => ''])]
    private string $codecuriste = '';

    #[ORM\Column(name: 'NOMCURISTE', type: Types::STRING, length: 30, options: ['default' => ''])]
    private string $nomcuriste = '';

    #[ORM\Column(name: 'DELAIRETRO', type: Types::INTEGER, options: ['default' => 0])]
    private int $delairetro = 0;

    #[ORM\Column(name: 'CATEG', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $categ = '';

    #[ORM\Column(name: 'NBENFDE1', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfde1 = 0;

    #[ORM\Column(name: 'NBENFDE2', type: Types::INTEGER, nullable: true, options: ['default' => 0])]
    private ?int $nbenfde2 = 0;

    #[ORM\Column(name: 'NBENFDE3', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfde3 = 0;

    #[ORM\Column(name: 'NBENFDE4', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfde4 = 0;

    #[ORM\Column(name: 'NBENFA1', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa1 = 0;

    #[ORM\Column(name: 'NBENFA2', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa2 = 0;

    #[ORM\Column(name: 'NBENFA3', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa3 = 0;

    #[ORM\Column(name: 'NBENFA4', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa4 = 0;

    #[ORM\Column(name: 'NBADULTEPAYANT1', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant1 = 0;

    #[ORM\Column(name: 'NBADULTEPAYANT2', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant2 = 0;

    #[ORM\Column(name: 'NBADULTEPAYANT3', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant3 = 0;

    #[ORM\Column(name: 'NBADULTEPAYANT4', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant4 = 0;

    #[ORM\Column(name: 'CATENF1', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf1 = 0;

    #[ORM\Column(name: 'CATENF2', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf2 = 0;

    #[ORM\Column(name: 'CATENF3', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf3 = 0;

    #[ORM\Column(name: 'CATENF4', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf4 = 0;

    #[ORM\Column(name: 'REDUCENF1', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf1 = '0';

    #[ORM\Column(name: 'REDUCENF2', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf2 = '0';

    #[ORM\Column(name: 'REDUCENF3', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf3 = '0';

    #[ORM\Column(name: 'REDUCENF4', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf4 = '0';

    #[ORM\Column(name: 'LOGIN', type: Types::STRING, length: 10, options: ['default' => ''])]
    private string $login = '';

    #[ORM\Column(name: 'IMPLANGUE', type: Types::INTEGER, options: ['default' => 0])]
    private int $implangue = 0;

    #[ORM\Column(name: 'MDP', type: Types::STRING, length: 10, options: ['default' => ''])]
    private string $mdp = '';

    #[ORM\Column(name: 'AGE1', type: Types::INTEGER, options: ['default' => 0])]
    private int $age1 = 0;

    #[ORM\Column(name: 'AGE2', type: Types::INTEGER, options: ['default' => 0])]
    private int $age2 = 0;

    #[ORM\Column(name: 'AGE3', type: Types::INTEGER, options: ['default' => 0])]
    private int $age3 = 0;

    #[ORM\Column(name: 'AGE4', type: Types::INTEGER, options: ['default' => 0])]
    private int $age4 = 0;

    #[ORM\Column(name: 'AGE5', type: Types::INTEGER, options: ['default' => 0])]
    private int $age5 = 0;

    #[ORM\Column(name: 'AGE6', type: Types::INTEGER, options: ['default' => 0])]
    private int $age6 = 0;

    #[ORM\Column(name: 'AGE7', type: Types::INTEGER, options: ['default' => 0])]
    private int $age7 = 0;

    #[ORM\Column(name: 'AGE8', type: Types::INTEGER, options: ['default' => 0])]
    private int $age8 = 0;

    #[ORM\Column(name: 'CODEPAYS', type: Types::STRING, length: 2, options: ['default' => ''])]
    private string $codepays = '';

    #[ORM\Column(name: 'ENGAGEMENT', type: Types::INTEGER, options: ['default' => 1])]
    private int $engagement = 1;

    #[ORM\Column(name: 'AGEENFANT4', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant4 = '';

    #[ORM\Column(name: 'AGEENFANT4DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant4de = 0;

    #[ORM\Column(name: 'AGEENFANT4A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant4a = 0;

    #[ORM\Column(name: 'STOCKGLOBAL', type: Types::INTEGER, options: ['default' => 0])]
    private int $stockglobal = 0;

    #[ORM\Column(name: 'BEBE', type: Types::INTEGER, options: ['default' => 0])]
    private int $bebe = 0;

    #[ORM\Column(name: 'TYPEACHAT', type: Types::INTEGER, options: ['default' => 0])]
    private int $typeachat = 0;

    #[ORM\Column(name: 'SEQSOUSPAYS', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqsouspays = 0;

    #[ORM\Column(name: 'AGEENFANTA1', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta1 = '';

    #[ORM\Column(name: 'AGEENFANTA2', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta2 = '';

    #[ORM\Column(name: 'AGEENFANTA3', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta3 = '';

    #[ORM\Column(name: 'AGEENFANTA4', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta4 = '';

    #[ORM\Column(name: 'BEBEA', type: Types::INTEGER, options: ['default' => 0])]
    private int $bebea = 0;

    #[ORM\Column(name: 'SEQREGLETARIFAIRE', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqregletarifaire = 0;

    #[ORM\Column(name: 'SANSBEBE', type: Types::INTEGER, options: ['default' => 0])]
    private int $sansbebe = 0;

    #[ORM\Column(name: 'SEQCURISTE', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqcuriste = 0;

    #[ORM\Column(name: 'IDPAYS', type: Types::INTEGER, options: ['default' => 0])]
    private int $idpays = 0;

    #[ORM\Column(name: 'SEQTYPEPROD', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqtypeprod = 0;

    #[ORM\Column(name: 'SEQGROUPE', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqgroupe = 0;

    #[ORM\Column(name: 'SEQPREST', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqprest = 0;

    #[ORM\Column(name: 'SEQRECEPTIF', type: Types::INTEGER, options: ['default' => 0])]
    private int $seqreceptif = 0;

    #[ORM\Column(name: 'DOCLANGUE', type: Types::INTEGER, options: ['default' => 0])]
    private int $doclangue = 0;

    #[ORM\Column(name: 'etablissement', type: Types::INTEGER, options: ['default' => 0])]
    private int $etablissement = 0;

    #[ORM\Column(name: 'CHAMBRE8', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre8 = 0;

    #[ORM\Column(name: 'ENFANT_INTERDIT', type: Types::INTEGER, options: ['default' => 0])]
    private int $enfantInterdit = 0;

    #[ORM\Column(name: 'BEBE_INTERDIT', type: Types::INTEGER, options: ['default' => 0])]
    private int $bebeInterdit = 0;

    #[ORM\Column(name: 'OBS1', type: Types::TEXT, options: ['default' => ''])]
    private string $obs1 = '';

    #[ORM\Column(name: 'OBSROOM', type: Types::STRING, length: 100, options: ['default' => ''])]
    private string $obsroom = '';

    #[ORM\Column(name: 'DESCRIPTIF', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $descriptif = '';

    #[ORM\Column(name: 'ACHATFIXE', type: Types::INTEGER, options: ['default' => 0])]
    private int $achatfixe = 0;

    #[ORM\Column(name: 'PROMO', type: Types::INTEGER, options: ['default' => 0])]
    private int $promo = 0;

    #[ORM\Column(name: 'STAY', type: Types::STRING, length: 10, options: ['default' => ''])]
    private string $stay = '';

    #[ORM\Column(name: 'CUREINCLUSE', type: Types::INTEGER, options: ['default' => 0])]
    private int $cureincluse = 0;

    #[ORM\Column(name: 'CODETERRESTRE', type: Types::STRING, length: 4, options: ['default' => ''])]
    private string $codeterrestre = '';

    #[ORM\Column(name: 'OK_REFNET', type: Types::INTEGER, options: ['default' => 0])]
    private int $okRefnet = 0;

    #[ORM\Column(name: 'OK_REFNET2', type: Types::INTEGER, options: ['default' => 0])]
    private int $okRefnet2 = 0;

    #[ORM\Column(name: 'EXCLURE_CALCUL_AUTOMATIQUE', type: Types::INTEGER, options: ['default' => 0])]
    private int $exclureCalculAutomatique = 0;

    #[ORM\Column(name: 'STATUT', type: Types::STRING, length: 8, options: ['default' => ''])]
    private string $statut = '';

    #[ORM\Column(name: 'O_VOYAGES', type: Types::INTEGER, options: ['default' => 0])]
    private int $oVoyages = 0;

    #[ORM\Column(name: 'CAPACITE1', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite1 = 0;

    #[ORM\Column(name: 'CAPACITE2', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite2 = 0;

    #[ORM\Column(name: 'CAPACITE3', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite3 = 0;

    #[ORM\Column(name: 'CAPACITE4', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite4 = 0;

    #[ORM\Column(name: 'CAPACITE5', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite5 = 0;

    #[ORM\Column(name: 'CAPACITE8', type: Types::INTEGER, options: ['default' => 0])]
    private int $capacite8 = 0;

    #[ORM\Column(name: 'CHAMBRE9', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre9 = 0;

    #[ORM\Column(name: 'CHAMBRE10', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre10 = 0;

    #[ORM\Column(name: 'CHAMBRE11', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre11 = 0;

    #[ORM\Column(name: 'CHAMBRE12', type: Types::INTEGER, options: ['default' => 0])]
    private int $chambre12 = 0;

    #[ORM\Column(name: 'LIBTYPECHAMBRE8', type: Types::STRING, length: 50, options: ['default' => ''])]
    private string $libtypechambre8 = '';

    #[ORM\Column(name: 'AGEENFANT5', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant5 = '';

    #[ORM\Column(name: 'AGEENFANT6', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfant6 = '';

    #[ORM\Column(name: 'AGEENFANT5DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant5de = 0;

    #[ORM\Column(name: 'AGEENFANT6DE', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant6de = 0;

    #[ORM\Column(name: 'AGEENFANT5A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant5a = 0;

    #[ORM\Column(name: 'AGEENFANT6A', type: Types::INTEGER, options: ['default' => 0])]
    private int $ageenfant6a = 0;

    #[ORM\Column(name: 'AGEENFANTA5', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta5 = '';

    #[ORM\Column(name: 'AGEENFANTA6', type: Types::STRING, length: 15, options: ['default' => ''])]
    private string $ageenfanta6 = '';

    #[ORM\Column(name: 'NBENFDE5', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfde5 = 0;

    #[ORM\Column(name: 'NBENFDE6', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfde6 = 0;

    #[ORM\Column(name: 'NBENFA5', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa5 = 0;

    #[ORM\Column(name: 'NBENFA6', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbenfa6 = 0;


    #[ORM\Column(name: 'NBADULTEPAYANT5', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant5 = 0;

    #[ORM\Column(name: 'NBADULTEPAYANT6', type: Types::INTEGER, options: ['default' => 0])]
    private int $nbadultepayant6 = 0;


    #[ORM\Column(name: 'CATENF5', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf5 = 0;

    #[ORM\Column(name: 'CATENF6', type: Types::INTEGER, options: ['default' => 0])]
    private int $catenf6 = 0;


    #[ORM\Column(name: 'REDUCENF5', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf5 = '0';

    #[ORM\Column(name: 'REDUCENF6', type: Types::DECIMAL, precision: 5, scale: 2, options: ['default' => 0])]
    private string $reducenf6 = '0';


    #[ORM\Column(name: 'AGE9', type: Types::INTEGER, options: ['default' => 0])]
    private int $age9 = 0;

    #[ORM\Column(name: 'AGE10', type: Types::INTEGER, options: ['default' => 0])]
    private int $age10 = 0;

    #[ORM\Column(name: 'AGE11', type: Types::INTEGER, options: ['default' => 0])]
    private int $age11 = 0;

    #[ORM\Column(name: 'AGE12', type: Types::INTEGER, options: ['default' => 0])]
    private int $age12 = 0;

    #[ORM\Column(length: 255)]
    private ?string $no = null;

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): static
    {
        $this->no = $no;

        return $this;
    }

    public function getSeqprod(): ?int
    {
        return $this->seqprod;
    }

    public function getCodeprod(): ?string
    {
        return $this->codeprod;
    }

    public function setCodeprod(string $codeprod): static
    {
        $this->codeprod = $codeprod;

        return $this;
    }

    public function getLibprod(): ?string
    {
        return $this->libprod;
    }

    public function setLibprod(string $libprod): static
    {
        $this->libprod = $libprod;

        return $this;
    }

    public function getLibprod2(): ?string
    {
        return $this->libprod2;
    }

    public function setLibprod2(string $libprod2): static
    {
        $this->libprod2 = $libprod2;

        return $this;
    }

    public function getLibtypeprod(): ?string
    {
        return $this->libtypeprod;
    }

    public function setLibtypeprod(string $libtypeprod): static
    {
        $this->libtypeprod = $libtypeprod;

        return $this;
    }

    public function getTypeproduit(): ?int
    {
        return $this->typeproduit;
    }

    public function setTypeproduit(int $typeproduit): static
    {
        $this->typeproduit = $typeproduit;

        return $this;
    }

    public function getLibgroupe(): ?string
    {
        return $this->libgroupe;
    }

    public function setLibgroupe(string $libgroupe): static
    {
        $this->libgroupe = $libgroupe;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getLibville(): ?string
    {
        return $this->libville;
    }

    public function setLibville(string $libville): static
    {
        $this->libville = $libville;

        return $this;
    }

    public function getLibpays(): ?string
    {
        return $this->libpays;
    }

    public function setLibpays(string $libpays): static
    {
        $this->libpays = $libpays;

        return $this;
    }

    public function getPatron(): ?string
    {
        return $this->patron;
    }

    public function setPatron(string $patron): static
    {
        $this->patron = $patron;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(string $email2): static
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getTel1(): ?string
    {
        return $this->tel1;
    }

    public function setTel1(string $tel1): static
    {
        $this->tel1 = $tel1;

        return $this;
    }

    public function getTel2(): ?string
    {
        return $this->tel2;
    }

    public function setTel2(string $tel2): static
    {
        $this->tel2 = $tel2;

        return $this;
    }

    public function getFaxhotel(): ?string
    {
        return $this->faxhotel;
    }

    public function setFaxhotel(string $faxhotel): static
    {
        $this->faxhotel = $faxhotel;

        return $this;
    }

    public function getFaxresa(): ?string
    {
        return $this->faxresa;
    }

    public function setFaxresa(string $faxresa): static
    {
        $this->faxresa = $faxresa;

        return $this;
    }

    public function getLibmonnaie(): ?string
    {
        return $this->libmonnaie;
    }

    public function setLibmonnaie(string $libmonnaie): static
    {
        $this->libmonnaie = $libmonnaie;

        return $this;
    }

    public function getLibprest(): ?string
    {
        return $this->libprest;
    }

    public function setLibprest(string $libprest): static
    {
        $this->libprest = $libprest;

        return $this;
    }

    public function getVendable(): ?int
    {
        return $this->vendable;
    }

    public function setVendable(int $vendable): static
    {
        $this->vendable = $vendable;

        return $this;
    }

    public function getSansprix(): ?int
    {
        return $this->sansprix;
    }

    public function setSansprix(int $sansprix): static
    {
        $this->sansprix = $sansprix;

        return $this;
    }

    public function getNomreceptif(): ?string
    {
        return $this->nomreceptif;
    }

    public function setNomreceptif(string $nomreceptif): static
    {
        $this->nomreceptif = $nomreceptif;

        return $this;
    }

    public function getChambre1(): ?int
    {
        return $this->chambre1;
    }

    public function setChambre1(int $chambre1): static
    {
        $this->chambre1 = $chambre1;

        return $this;
    }

    public function getChambre2(): ?int
    {
        return $this->chambre2;
    }

    public function setChambre2(int $chambre2): static
    {
        $this->chambre2 = $chambre2;

        return $this;
    }

    public function getChambre3(): ?int
    {
        return $this->chambre3;
    }

    public function setChambre3(int $chambre3): static
    {
        $this->chambre3 = $chambre3;

        return $this;
    }

    public function getChambre4(): ?int
    {
        return $this->chambre4;
    }

    public function setChambre4(int $chambre4): static
    {
        $this->chambre4 = $chambre4;

        return $this;
    }

    public function getChambre5(): ?int
    {
        return $this->chambre5;
    }

    public function setChambre5(int $chambre5): static
    {
        $this->chambre5 = $chambre5;

        return $this;
    }

    public function getChambre6(): ?int
    {
        return $this->chambre6;
    }

    public function setChambre6(int $chambre6): static
    {
        $this->chambre6 = $chambre6;

        return $this;
    }

    public function getChambre7(): ?int
    {
        return $this->chambre7;
    }

    public function setChambre7(int $chambre7): static
    {
        $this->chambre7 = $chambre7;

        return $this;
    }

    public function getTransfert(): ?int
    {
        return $this->transfert;
    }

    public function setTransfert(int $transfert): static
    {
        $this->transfert = $transfert;

        return $this;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(int $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getContrat(): ?int
    {
        return $this->contrat;
    }

    public function setContrat(int $contrat): static
    {
        $this->contrat = $contrat;

        return $this;
    }

    public function getSeqfour(): ?string
    {
        return $this->seqfour;
    }

    public function setSeqfour(string $seqfour): static
    {
        $this->seqfour = $seqfour;

        return $this;
    }

    public function getNomfour(): ?string
    {
        return $this->nomfour;
    }

    public function setNomfour(string $nomfour): static
    {
        $this->nomfour = $nomfour;

        return $this;
    }

    public function getCee(): ?int
    {
        return $this->cee;
    }

    public function setCee(int $cee): static
    {
        $this->cee = $cee;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(string $obs): static
    {
        $this->obs = $obs;

        return $this;
    }

    public function getAgeenfant1(): ?string
    {
        return $this->ageenfant1;
    }

    public function setAgeenfant1(string $ageenfant1): static
    {
        $this->ageenfant1 = $ageenfant1;

        return $this;
    }

    public function getAgeenfant2(): ?string
    {
        return $this->ageenfant2;
    }

    public function setAgeenfant2(string $ageenfant2): static
    {
        $this->ageenfant2 = $ageenfant2;

        return $this;
    }

    public function getAgeenfant3(): ?string
    {
        return $this->ageenfant3;
    }

    public function setAgeenfant3(string $ageenfant3): static
    {
        $this->ageenfant3 = $ageenfant3;

        return $this;
    }

    public function getConfirmation(): ?string
    {
        return $this->confirmation;
    }

    public function setConfirmation(string $confirmation): static
    {
        $this->confirmation = $confirmation;

        return $this;
    }

    public function getCcompta(): ?string
    {
        return $this->ccompta;
    }

    public function setCcompta(string $ccompta): static
    {
        $this->ccompta = $ccompta;

        return $this;
    }

    public function getLibtypechambre1(): ?string
    {
        return $this->libtypechambre1;
    }

    public function setLibtypechambre1(string $libtypechambre1): static
    {
        $this->libtypechambre1 = $libtypechambre1;

        return $this;
    }

    public function getLibtypechambre2(): ?string
    {
        return $this->libtypechambre2;
    }

    public function setLibtypechambre2(string $libtypechambre2): static
    {
        $this->libtypechambre2 = $libtypechambre2;

        return $this;
    }

    public function getLibtypechambre3(): ?string
    {
        return $this->libtypechambre3;
    }

    public function setLibtypechambre3(string $libtypechambre3): static
    {
        $this->libtypechambre3 = $libtypechambre3;

        return $this;
    }

    public function getLibtypechambre4(): ?string
    {
        return $this->libtypechambre4;
    }

    public function setLibtypechambre4(string $libtypechambre4): static
    {
        $this->libtypechambre4 = $libtypechambre4;

        return $this;
    }

    public function getLibtypechambre5(): ?string
    {
        return $this->libtypechambre5;
    }

    public function setLibtypechambre5(string $libtypechambre5): static
    {
        $this->libtypechambre5 = $libtypechambre5;

        return $this;
    }

    public function getLibtypechambre6(): ?string
    {
        return $this->libtypechambre6;
    }

    public function setLibtypechambre6(string $libtypechambre6): static
    {
        $this->libtypechambre6 = $libtypechambre6;

        return $this;
    }

    public function getLibtypechambre7(): ?string
    {
        return $this->libtypechambre7;
    }

    public function setLibtypechambre7(string $libtypechambre7): static
    {
        $this->libtypechambre7 = $libtypechambre7;

        return $this;
    }

    public function getCapacite6(): ?int
    {
        return $this->capacite6;
    }

    public function setCapacite6(int $capacite6): static
    {
        $this->capacite6 = $capacite6;

        return $this;
    }

    public function getCapacite7(): ?int
    {
        return $this->capacite7;
    }

    public function setCapacite7(int $capacite7): static
    {
        $this->capacite7 = $capacite7;

        return $this;
    }

    public function getAgeenfant1de(): ?int
    {
        return $this->ageenfant1de;
    }

    public function setAgeenfant1de(int $ageenfant1de): static
    {
        $this->ageenfant1de = $ageenfant1de;

        return $this;
    }

    public function getAgeenfant2de(): ?int
    {
        return $this->ageenfant2de;
    }

    public function setAgeenfant2de(int $ageenfant2de): static
    {
        $this->ageenfant2de = $ageenfant2de;

        return $this;
    }

    public function getAgeenfant3de(): ?int
    {
        return $this->ageenfant3de;
    }

    public function setAgeenfant3de(int $ageenfant3de): static
    {
        $this->ageenfant3de = $ageenfant3de;

        return $this;
    }

    public function getAgeenfant1a(): ?int
    {
        return $this->ageenfant1a;
    }

    public function setAgeenfant1a(int $ageenfant1a): static
    {
        $this->ageenfant1a = $ageenfant1a;

        return $this;
    }

    public function getAgeenfant2a(): ?int
    {
        return $this->ageenfant2a;
    }

    public function setAgeenfant2a(int $ageenfant2a): static
    {
        $this->ageenfant2a = $ageenfant2a;

        return $this;
    }

    public function getAgeenfant3a(): ?int
    {
        return $this->ageenfant3a;
    }

    public function setAgeenfant3a(int $ageenfant3a): static
    {
        $this->ageenfant3a = $ageenfant3a;

        return $this;
    }

    public function getEnfantgratuit(): ?int
    {
        return $this->enfantgratuit;
    }

    public function setEnfantgratuit(int $enfantgratuit): static
    {
        $this->enfantgratuit = $enfantgratuit;

        return $this;
    }

    public function getMarge(): ?int
    {
        return $this->marge;
    }

    public function setMarge(int $marge): static
    {
        $this->marge = $marge;

        return $this;
    }

    public function getSeparer(): ?int
    {
        return $this->separer;
    }

    public function setSeparer(int $separer): static
    {
        $this->separer = $separer;

        return $this;
    }

    public function getAttente(): ?int
    {
        return $this->attente;
    }

    public function setAttente(int $attente): static
    {
        $this->attente = $attente;

        return $this;
    }

    public function getEnvoi(): ?int
    {
        return $this->envoi;
    }

    public function setEnvoi(int $envoi): static
    {
        $this->envoi = $envoi;

        return $this;
    }

    public function getArchiver(): ?int
    {
        return $this->archiver;
    }

    public function setArchiver(int $archiver): static
    {
        $this->archiver = $archiver;

        return $this;
    }

    public function getAero1(): ?string
    {
        return $this->aero1;
    }

    public function setAero1(string $aero1): static
    {
        $this->aero1 = $aero1;

        return $this;
    }

    public function getAero2(): ?string
    {
        return $this->aero2;
    }

    public function setAero2(string $aero2): static
    {
        $this->aero2 = $aero2;

        return $this;
    }

    public function getAero3(): ?string
    {
        return $this->aero3;
    }

    public function setAero3(string $aero3): static
    {
        $this->aero3 = $aero3;

        return $this;
    }

    public function getFreesale(): ?int
    {
        return $this->freesale;
    }

    public function setFreesale(int $freesale): static
    {
        $this->freesale = $freesale;

        return $this;
    }

    public function getStatutVente(): ?int
    {
        return $this->statutVente;
    }

    public function setStatutVente(int $statutVente): static
    {
        $this->statutVente = $statutVente;

        return $this;
    }

    public function getTpladulte(): ?int
    {
        return $this->tpladulte;
    }

    public function setTpladulte(int $tpladulte): static
    {
        $this->tpladulte = $tpladulte;

        return $this;
    }

    public function getCodecuriste(): ?string
    {
        return $this->codecuriste;
    }

    public function setCodecuriste(string $codecuriste): static
    {
        $this->codecuriste = $codecuriste;

        return $this;
    }

    public function getNomcuriste(): ?string
    {
        return $this->nomcuriste;
    }

    public function setNomcuriste(string $nomcuriste): static
    {
        $this->nomcuriste = $nomcuriste;

        return $this;
    }

    public function getDelairetro(): ?int
    {
        return $this->delairetro;
    }

    public function setDelairetro(int $delairetro): static
    {
        $this->delairetro = $delairetro;

        return $this;
    }

    public function getCateg(): ?string
    {
        return $this->categ;
    }

    public function setCateg(string $categ): static
    {
        $this->categ = $categ;

        return $this;
    }

    public function getNbenfde1(): ?int
    {
        return $this->nbenfde1;
    }

    public function setNbenfde1(int $nbenfde1): static
    {
        $this->nbenfde1 = $nbenfde1;

        return $this;
    }

    public function getNbenfde2(): ?int
    {
        return $this->nbenfde2;
    }

    public function setNbenfde2(?int $nbenfde2): static
    {
        $this->nbenfde2 = $nbenfde2;

        return $this;
    }

    public function getNbenfde3(): ?int
    {
        return $this->nbenfde3;
    }

    public function setNbenfde3(int $nbenfde3): static
    {
        $this->nbenfde3 = $nbenfde3;

        return $this;
    }

    public function getNbenfde4(): ?int
    {
        return $this->nbenfde4;
    }

    public function setNbenfde4(int $nbenfde4): static
    {
        $this->nbenfde4 = $nbenfde4;

        return $this;
    }

    public function getNbenfa1(): ?int
    {
        return $this->nbenfa1;
    }

    public function setNbenfa1(int $nbenfa1): static
    {
        $this->nbenfa1 = $nbenfa1;

        return $this;
    }

    public function getNbenfa2(): ?int
    {
        return $this->nbenfa2;
    }

    public function setNbenfa2(int $nbenfa2): static
    {
        $this->nbenfa2 = $nbenfa2;

        return $this;
    }

    public function getNbenfa3(): ?int
    {
        return $this->nbenfa3;
    }

    public function setNbenfa3(int $nbenfa3): static
    {
        $this->nbenfa3 = $nbenfa3;

        return $this;
    }

    public function getNbenfa4(): ?int
    {
        return $this->nbenfa4;
    }

    public function setNbenfa4(int $nbenfa4): static
    {
        $this->nbenfa4 = $nbenfa4;

        return $this;
    }

    public function getNbadultepayant1(): ?int
    {
        return $this->nbadultepayant1;
    }

    public function setNbadultepayant1(int $nbadultepayant1): static
    {
        $this->nbadultepayant1 = $nbadultepayant1;

        return $this;
    }

    public function getNbadultepayant2(): ?int
    {
        return $this->nbadultepayant2;
    }

    public function setNbadultepayant2(int $nbadultepayant2): static
    {
        $this->nbadultepayant2 = $nbadultepayant2;

        return $this;
    }

    public function getNbadultepayant3(): ?int
    {
        return $this->nbadultepayant3;
    }

    public function setNbadultepayant3(int $nbadultepayant3): static
    {
        $this->nbadultepayant3 = $nbadultepayant3;

        return $this;
    }

    public function getNbadultepayant4(): ?int
    {
        return $this->nbadultepayant4;
    }

    public function setNbadultepayant4(int $nbadultepayant4): static
    {
        $this->nbadultepayant4 = $nbadultepayant4;

        return $this;
    }

    public function getCatenf1(): ?int
    {
        return $this->catenf1;
    }

    public function setCatenf1(int $catenf1): static
    {
        $this->catenf1 = $catenf1;

        return $this;
    }

    public function getCatenf2(): ?int
    {
        return $this->catenf2;
    }

    public function setCatenf2(int $catenf2): static
    {
        $this->catenf2 = $catenf2;

        return $this;
    }

    public function getCatenf3(): ?int
    {
        return $this->catenf3;
    }

    public function setCatenf3(int $catenf3): static
    {
        $this->catenf3 = $catenf3;

        return $this;
    }

    public function getCatenf4(): ?int
    {
        return $this->catenf4;
    }

    public function setCatenf4(int $catenf4): static
    {
        $this->catenf4 = $catenf4;

        return $this;
    }

    public function getReducenf1(): ?string
    {
        return $this->reducenf1;
    }

    public function setReducenf1(string $reducenf1): static
    {
        $this->reducenf1 = $reducenf1;

        return $this;
    }

    public function getReducenf2(): ?string
    {
        return $this->reducenf2;
    }

    public function setReducenf2(string $reducenf2): static
    {
        $this->reducenf2 = $reducenf2;

        return $this;
    }

    public function getReducenf3(): ?string
    {
        return $this->reducenf3;
    }

    public function setReducenf3(string $reducenf3): static
    {
        $this->reducenf3 = $reducenf3;

        return $this;
    }

    public function getReducenf4(): ?string
    {
        return $this->reducenf4;
    }

    public function setReducenf4(string $reducenf4): static
    {
        $this->reducenf4 = $reducenf4;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): static
    {
        $this->login = $login;

        return $this;
    }

    public function getImplangue(): ?int
    {
        return $this->implangue;
    }

    public function setImplangue(int $implangue): static
    {
        $this->implangue = $implangue;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getAge1(): ?int
    {
        return $this->age1;
    }

    public function setAge1(int $age1): static
    {
        $this->age1 = $age1;

        return $this;
    }

    public function getAge2(): ?int
    {
        return $this->age2;
    }

    public function setAge2(int $age2): static
    {
        $this->age2 = $age2;

        return $this;
    }

    public function getAge3(): ?int
    {
        return $this->age3;
    }

    public function setAge3(int $age3): static
    {
        $this->age3 = $age3;

        return $this;
    }

    public function getAge4(): ?int
    {
        return $this->age4;
    }

    public function setAge4(int $age4): static
    {
        $this->age4 = $age4;

        return $this;
    }

    public function getAge5(): ?int
    {
        return $this->age5;
    }

    public function setAge5(int $age5): static
    {
        $this->age5 = $age5;

        return $this;
    }

    public function getAge6(): ?int
    {
        return $this->age6;
    }

    public function setAge6(int $age6): static
    {
        $this->age6 = $age6;

        return $this;
    }

    public function getAge7(): ?int
    {
        return $this->age7;
    }

    public function setAge7(int $age7): static
    {
        $this->age7 = $age7;

        return $this;
    }

    public function getAge8(): ?int
    {
        return $this->age8;
    }

    public function setAge8(int $age8): static
    {
        $this->age8 = $age8;

        return $this;
    }

    public function getCodepays(): ?string
    {
        return $this->codepays;
    }

    public function setCodepays(string $codepays): static
    {
        $this->codepays = $codepays;

        return $this;
    }

    public function getEngagement(): ?int
    {
        return $this->engagement;
    }

    public function setEngagement(int $engagement): static
    {
        $this->engagement = $engagement;

        return $this;
    }

    public function getAgeenfant4(): ?string
    {
        return $this->ageenfant4;
    }

    public function setAgeenfant4(string $ageenfant4): static
    {
        $this->ageenfant4 = $ageenfant4;

        return $this;
    }

    public function getAgeenfant4de(): ?int
    {
        return $this->ageenfant4de;
    }

    public function setAgeenfant4de(int $ageenfant4de): static
    {
        $this->ageenfant4de = $ageenfant4de;

        return $this;
    }

    public function getAgeenfant4a(): ?int
    {
        return $this->ageenfant4a;
    }

    public function setAgeenfant4a(int $ageenfant4a): static
    {
        $this->ageenfant4a = $ageenfant4a;

        return $this;
    }

    public function getStockglobal(): ?int
    {
        return $this->stockglobal;
    }

    public function setStockglobal(int $stockglobal): static
    {
        $this->stockglobal = $stockglobal;

        return $this;
    }

    public function getBebe(): ?int
    {
        return $this->bebe;
    }

    public function setBebe(int $bebe): static
    {
        $this->bebe = $bebe;

        return $this;
    }

    public function getTypeachat(): ?int
    {
        return $this->typeachat;
    }

    public function setTypeachat(int $typeachat): static
    {
        $this->typeachat = $typeachat;

        return $this;
    }

    public function getSeqsouspays(): ?int
    {
        return $this->seqsouspays;
    }

    public function setSeqsouspays(int $seqsouspays): static
    {
        $this->seqsouspays = $seqsouspays;

        return $this;
    }

    public function getAgeenfanta1(): ?string
    {
        return $this->ageenfanta1;
    }

    public function setAgeenfanta1(string $ageenfanta1): static
    {
        $this->ageenfanta1 = $ageenfanta1;

        return $this;
    }

    public function getAgeenfanta2(): ?string
    {
        return $this->ageenfanta2;
    }

    public function setAgeenfanta2(string $ageenfanta2): static
    {
        $this->ageenfanta2 = $ageenfanta2;

        return $this;
    }

    public function getAgeenfanta3(): ?string
    {
        return $this->ageenfanta3;
    }

    public function setAgeenfanta3(string $ageenfanta3): static
    {
        $this->ageenfanta3 = $ageenfanta3;

        return $this;
    }

    public function getAgeenfanta4(): ?string
    {
        return $this->ageenfanta4;
    }

    public function setAgeenfanta4(string $ageenfanta4): static
    {
        $this->ageenfanta4 = $ageenfanta4;

        return $this;
    }

    public function getBebea(): ?int
    {
        return $this->bebea;
    }

    public function setBebea(int $bebea): static
    {
        $this->bebea = $bebea;

        return $this;
    }

    public function getSeqregletarifaire(): ?int
    {
        return $this->seqregletarifaire;
    }

    public function setSeqregletarifaire(int $seqregletarifaire): static
    {
        $this->seqregletarifaire = $seqregletarifaire;

        return $this;
    }

    public function getSansbebe(): ?int
    {
        return $this->sansbebe;
    }

    public function setSansbebe(int $sansbebe): static
    {
        $this->sansbebe = $sansbebe;

        return $this;
    }

    public function getSeqcuriste(): ?int
    {
        return $this->seqcuriste;
    }

    public function setSeqcuriste(int $seqcuriste): static
    {
        $this->seqcuriste = $seqcuriste;

        return $this;
    }

    public function getIdpays(): ?int
    {
        return $this->idpays;
    }

    public function setIdpays(int $idpays): static
    {
        $this->idpays = $idpays;

        return $this;
    }

    public function getSeqtypeprod(): ?int
    {
        return $this->seqtypeprod;
    }

    public function setSeqtypeprod(int $seqtypeprod): static
    {
        $this->seqtypeprod = $seqtypeprod;

        return $this;
    }

    public function getSeqgroupe(): ?int
    {
        return $this->seqgroupe;
    }

    public function setSeqgroupe(int $seqgroupe): static
    {
        $this->seqgroupe = $seqgroupe;

        return $this;
    }

    public function getSeqprest(): ?int
    {
        return $this->seqprest;
    }

    public function setSeqprest(int $seqprest): static
    {
        $this->seqprest = $seqprest;

        return $this;
    }

    public function getSeqreceptif(): ?int
    {
        return $this->seqreceptif;
    }

    public function setSeqreceptif(int $seqreceptif): static
    {
        $this->seqreceptif = $seqreceptif;

        return $this;
    }

    public function getDoclangue(): ?int
    {
        return $this->doclangue;
    }

    public function setDoclangue(int $doclangue): static
    {
        $this->doclangue = $doclangue;

        return $this;
    }

    public function getEtablissement(): ?int
    {
        return $this->etablissement;
    }

    public function setEtablissement(int $etablissement): static
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getChambre8(): ?int
    {
        return $this->chambre8;
    }

    public function setChambre8(int $chambre8): static
    {
        $this->chambre8 = $chambre8;

        return $this;
    }

    public function getEnfantInterdit(): ?int
    {
        return $this->enfantInterdit;
    }

    public function setEnfantInterdit(int $enfantInterdit): static
    {
        $this->enfantInterdit = $enfantInterdit;

        return $this;
    }

    public function getBebeInterdit(): ?int
    {
        return $this->bebeInterdit;
    }

    public function setBebeInterdit(int $bebeInterdit): static
    {
        $this->bebeInterdit = $bebeInterdit;

        return $this;
    }

    public function getObs1(): ?string
    {
        return $this->obs1;
    }

    public function setObs1(string $obs1): static
    {
        $this->obs1 = $obs1;

        return $this;
    }

    public function getObsroom(): ?string
    {
        return $this->obsroom;
    }

    public function setObsroom(string $obsroom): static
    {
        $this->obsroom = $obsroom;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): static
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getAchatfixe(): ?int
    {
        return $this->achatfixe;
    }

    public function setAchatfixe(int $achatfixe): static
    {
        $this->achatfixe = $achatfixe;

        return $this;
    }

    public function getPromo(): ?int
    {
        return $this->promo;
    }

    public function setPromo(int $promo): static
    {
        $this->promo = $promo;

        return $this;
    }

    public function getStay(): ?string
    {
        return $this->stay;
    }

    public function setStay(string $stay): static
    {
        $this->stay = $stay;

        return $this;
    }

    public function getCureincluse(): ?int
    {
        return $this->cureincluse;
    }

    public function setCureincluse(int $cureincluse): static
    {
        $this->cureincluse = $cureincluse;

        return $this;
    }

    public function getCodeterrestre(): ?string
    {
        return $this->codeterrestre;
    }

    public function setCodeterrestre(string $codeterrestre): static
    {
        $this->codeterrestre = $codeterrestre;

        return $this;
    }

    public function getOkRefnet(): ?int
    {
        return $this->okRefnet;
    }

    public function setOkRefnet(int $okRefnet): static
    {
        $this->okRefnet = $okRefnet;

        return $this;
    }

    public function getOkRefnet2(): ?int
    {
        return $this->okRefnet2;
    }

    public function setOkRefnet2(int $okRefnet2): static
    {
        $this->okRefnet2 = $okRefnet2;

        return $this;
    }

    public function getExclureCalculAutomatique(): ?int
    {
        return $this->exclureCalculAutomatique;
    }

    public function setExclureCalculAutomatique(int $exclureCalculAutomatique): static
    {
        $this->exclureCalculAutomatique = $exclureCalculAutomatique;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getOVoyages(): ?int
    {
        return $this->oVoyages;
    }

    public function setOVoyages(int $oVoyages): static
    {
        $this->oVoyages = $oVoyages;

        return $this;
    }

    public function getCapacite1(): ?int
    {
        return $this->capacite1;
    }

    public function setCapacite1(int $capacite1): static
    {
        $this->capacite1 = $capacite1;

        return $this;
    }

    public function getCapacite2(): ?int
    {
        return $this->capacite2;
    }

    public function setCapacite2(int $capacite2): static
    {
        $this->capacite2 = $capacite2;

        return $this;
    }

    public function getCapacite3(): ?int
    {
        return $this->capacite3;
    }

    public function setCapacite3(int $capacite3): static
    {
        $this->capacite3 = $capacite3;

        return $this;
    }

    public function getCapacite4(): ?int
    {
        return $this->capacite4;
    }

    public function setCapacite4(int $capacite4): static
    {
        $this->capacite4 = $capacite4;

        return $this;
    }

    public function getCapacite5(): ?int
    {
        return $this->capacite5;
    }

    public function setCapacite5(int $capacite5): static
    {
        $this->capacite5 = $capacite5;

        return $this;
    }

    public function getCapacite8(): ?int
    {
        return $this->capacite8;
    }

    public function setCapacite8(int $capacite8): static
    {
        $this->capacite8 = $capacite8;

        return $this;
    }

    public function getChambre9(): ?int
    {
        return $this->chambre9;
    }

    public function setChambre9(int $chambre9): static
    {
        $this->chambre9 = $chambre9;

        return $this;
    }

    public function getChambre10(): ?int
    {
        return $this->chambre10;
    }

    public function setChambre10(int $chambre10): static
    {
        $this->chambre10 = $chambre10;

        return $this;
    }

    public function getChambre11(): ?int
    {
        return $this->chambre11;
    }

    public function setChambre11(int $chambre11): static
    {
        $this->chambre11 = $chambre11;

        return $this;
    }

    public function getChambre12(): ?int
    {
        return $this->chambre12;
    }

    public function setChambre12(int $chambre12): static
    {
        $this->chambre12 = $chambre12;

        return $this;
    }

    public function getLibtypechambre8(): ?string
    {
        return $this->libtypechambre8;
    }

    public function setLibtypechambre8(string $libtypechambre8): static
    {
        $this->libtypechambre8 = $libtypechambre8;

        return $this;
    }

    public function getAgeenfant5(): ?string
    {
        return $this->ageenfant5;
    }

    public function setAgeenfant5(string $ageenfant5): static
    {
        $this->ageenfant5 = $ageenfant5;

        return $this;
    }

    public function getAgeenfant6(): ?string
    {
        return $this->ageenfant6;
    }

    public function setAgeenfant6(string $ageenfant6): static
    {
        $this->ageenfant6 = $ageenfant6;

        return $this;
    }

    public function getAgeenfant5de(): ?int
    {
        return $this->ageenfant5de;
    }

    public function setAgeenfant5de(int $ageenfant5de): static
    {
        $this->ageenfant5de = $ageenfant5de;

        return $this;
    }

    public function getAgeenfant6de(): ?int
    {
        return $this->ageenfant6de;
    }

    public function setAgeenfant6de(int $ageenfant6de): static
    {
        $this->ageenfant6de = $ageenfant6de;

        return $this;
    }

    public function getAgeenfant5a(): ?int
    {
        return $this->ageenfant5a;
    }

    public function setAgeenfant5a(int $ageenfant5a): static
    {
        $this->ageenfant5a = $ageenfant5a;

        return $this;
    }

    public function getAgeenfant6a(): ?int
    {
        return $this->ageenfant6a;
    }

    public function setAgeenfant6a(int $ageenfant6a): static
    {
        $this->ageenfant6a = $ageenfant6a;

        return $this;
    }

    public function getAgeenfanta5(): ?string
    {
        return $this->ageenfanta5;
    }

    public function setAgeenfanta5(string $ageenfanta5): static
    {
        $this->ageenfanta5 = $ageenfanta5;

        return $this;
    }

    public function getAgeenfanta6(): ?string
    {
        return $this->ageenfanta6;
    }

    public function setAgeenfanta6(string $ageenfanta6): static
    {
        $this->ageenfanta6 = $ageenfanta6;

        return $this;
    }

    public function getNbenfde5(): ?int
    {
        return $this->nbenfde5;
    }

    public function setNbenfde5(int $nbenfde5): static
    {
        $this->nbenfde5 = $nbenfde5;

        return $this;
    }

    public function getNbenfde6(): ?int
    {
        return $this->nbenfde6;
    }

    public function setNbenfde6(int $nbenfde6): static
    {
        $this->nbenfde6 = $nbenfde6;

        return $this;
    }

    public function getNbenfa5(): ?int
    {
        return $this->nbenfa5;
    }

    public function setNbenfa5(int $nbenfa5): static
    {
        $this->nbenfa5 = $nbenfa5;

        return $this;
    }

    public function getNbenfa6(): ?int
    {
        return $this->nbenfa6;
    }

    public function setNbenfa6(int $nbenfa6): static
    {
        $this->nbenfa6 = $nbenfa6;

        return $this;
    }

    public function getNbadultepayant5(): ?int
    {
        return $this->nbadultepayant5;
    }

    public function setNbadultepayant5(int $nbadultepayant5): static
    {
        $this->nbadultepayant5 = $nbadultepayant5;

        return $this;
    }

    public function getNbadultepayant6(): ?int
    {
        return $this->nbadultepayant6;
    }

    public function setNbadultepayant6(int $nbadultepayant6): static
    {
        $this->nbadultepayant6 = $nbadultepayant6;

        return $this;
    }

    public function getCatenf5(): ?int
    {
        return $this->catenf5;
    }

    public function setCatenf5(int $catenf5): static
    {
        $this->catenf5 = $catenf5;

        return $this;
    }

    public function getCatenf6(): ?int
    {
        return $this->catenf6;
    }

    public function setCatenf6(int $catenf6): static
    {
        $this->catenf6 = $catenf6;

        return $this;
    }

    public function getReducenf5(): ?string
    {
        return $this->reducenf5;
    }

    public function setReducenf5(string $reducenf5): static
    {
        $this->reducenf5 = $reducenf5;

        return $this;
    }

    public function getReducenf6(): ?string
    {
        return $this->reducenf6;
    }

    public function setReducenf6(string $reducenf6): static
    {
        $this->reducenf6 = $reducenf6;

        return $this;
    }

    public function getAge9(): ?int
    {
        return $this->age9;
    }

    public function setAge9(int $age9): static
    {
        $this->age9 = $age9;

        return $this;
    }

    public function getAge10(): ?int
    {
        return $this->age10;
    }

    public function setAge10(int $age10): static
    {
        $this->age10 = $age10;

        return $this;
    }

    public function getAge11(): ?int
    {
        return $this->age11;
    }

    public function setAge11(int $age11): static
    {
        $this->age11 = $age11;

        return $this;
    }

    public function getAge12(): ?int
    {
        return $this->age12;
    }

    public function setAge12(int $age12): static
    {
        $this->age12 = $age12;

        return $this;
    }

}
