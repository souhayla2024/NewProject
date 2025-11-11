<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ORM\Table(
    name: 'CLIENT',
    uniqueConstraints: [new ORM\UniqueConstraint(name: 'IX_CLIENT', columns: ['SEQCLT'])]
)]
class Client
{
    // ========== Columns as in SQL Server ==========

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'NUMCLT', type: Types::INTEGER)]
    private ?int $numclt = null;

    #[ORM\Column(name: 'SEQCLT', type: Types::STRING, length: 6, nullable: false, options: ['default' => ''])]
    private string $seqclt = '';

    #[ORM\Column(name: 'NOMRESEAU', type: Types::STRING, length: 50, nullable: false, options: ['default' => ''])]
    private string $nomreseau = '';

    #[ORM\Column(name: 'SOUSRESEAU', type: Types::STRING, length: 50, nullable: false, options: ['default' => ''])]
    private string $sousreseau = '';

    #[ORM\Column(name: 'SEQCLTPACKDB', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqcltpackdb = 0;

    #[ORM\Column(name: 'REFPACKDB', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $refpackdb = '';

    #[ORM\Column(name: 'NOMCLT', type: Types::STRING, length: 50, nullable: false, options: ['default' => ''])]
    private string $nomclt = '';

    #[ORM\Column(name: 'ADRESSE', type: Types::STRING, length: 80, nullable: false, options: ['default' => ''])]
    private string $adresse = '';

    #[ORM\Column(name: 'CP', type: Types::STRING, length: 6, nullable: false, options: ['default' => ''])]
    private string $cp = '';

    #[ORM\Column(name: 'VILLE', type: Types::STRING, length: 30, nullable: false, options: ['default' => ''])]
    private string $ville = '';

    #[ORM\Column(name: 'PAYS', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $pays = '';

    #[ORM\Column(name: 'TEL1', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $tel1 = '';

    #[ORM\Column(name: 'TEL2', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $tel2 = '';

    #[ORM\Column(name: 'TEL3', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $tel3 = '';

    #[ORM\Column(name: 'FAX', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $fax = '';

    #[ORM\Column(name: 'EMAIL', type: Types::STRING, length: 150, nullable: false, options: ['default' => ''])]
    private string $email = '';

    #[ORM\Column(name: 'PATRON', type: Types::STRING, length: 60, nullable: false, options: ['default' => ''])]
    private string $patron = '';

    #[ORM\Column(name: 'CONTACT', type: Types::STRING, length: 60, nullable: false, options: ['default' => ''])]
    private string $contact = '';

    #[ORM\Column(name: 'CCOMPTA', type: Types::STRING, length: 25, nullable: false, options: ['default' => ''])]
    private string $ccompta = '';

    #[ORM\Column(name: 'COMMISS', type: Types::DECIMAL, precision: 6, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $commiss = '0.00';

    #[ORM\Column(name: 'COMMISS2', type: Types::DECIMAL, precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $commiss2 = '0.00';

    #[ORM\Column(name: 'COMMISS3', type: Types::DECIMAL, precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $commiss3 = '0.00';

    #[ORM\Column(name: 'COMMISS4', type: Types::DECIMAL, precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $commiss4 = '0.00';

    #[ORM\Column(name: 'COMTTC', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $comttc = 0;

    #[ORM\Column(name: 'OBS', type: Types::TEXT, nullable: false, options: ['default' => ''])]
    private string $obs = '';

    #[ORM\Column(name: 'LIBRE', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $libre = 0;

    #[ORM\Column(name: 'CONFIRMATION', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $confirmation = 0;

    #[ORM\Column(name: 'FRAIS', type: Types::DECIMAL, precision: 7, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $frais = '0.00';

    #[ORM\Column(name: 'TAXE', type: Types::DECIMAL, precision: 7, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $taxe = '0.00';

    #[ORM\Column(name: 'CODECOMMERCIAL', type: Types::STRING, length: 4, nullable: false, options: ['default' => ''])]
    private string $codecommercial = '';

    #[ORM\Column(name: 'LIBTYPEREGLE', type: Types::STRING, length: 60, nullable: false, options: ['default' => ''])]
    private string $libtyperegle = '';

    #[ORM\Column(name: 'PAIEMENT', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $paiement = 0;

    #[ORM\Column(name: 'DATESAISIE', type: Types::DATETIME_MUTABLE, nullable: false)]
    private \DateTimeInterface $datesaisie;

    #[ORM\Column(name: 'COMPTA', type: Types::STRING, length: 150, nullable: false, options: ['default' => ''])]
    private string $compta = '';

    #[ORM\Column(name: 'CONVOC', type: Types::STRING, length: 150, nullable: false, options: ['default' => ''])]
    private string $convoc = '';

    #[ORM\Column(name: 'RESA', type: Types::STRING, length: 150, nullable: false, options: ['default' => ''])]
    private string $resa = '';

    #[ORM\Column(name: 'TYPEREGLE', type: Types::STRING, length: 50, nullable: false, options: ['default' => ''])]
    private string $typeregle = '';

    #[ORM\Column(name: 'LIBTYPECLT', type: Types::STRING, length: 100, nullable: false, options: ['default' => ''])]
    private string $libtypeclt = '';

    #[ORM\Column(name: 'CCREDIT', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $ccredit = 0;

    #[ORM\Column(name: 'ADRESSE2', type: Types::STRING, length: 60, nullable: false, options: ['default' => ''])]
    private string $adresse2 = '';

    #[ORM\Column(name: 'PRINCIPAL', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $principal = '';

    #[ORM\Column(name: 'POINTCOM', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $pointcom = 0;

    #[ORM\Column(name: 'REFUNIQUE', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $refunique = 0;

    #[ORM\Column(name: 'GROUPECLIENT', type: Types::STRING, length: 50, nullable: false, options: ['default' => ''])]
    private string $groupeclient = '';

    #[ORM\Column(name: 'LITIGE', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $litige = 0;

    #[ORM\Column(name: 'LOGIN', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $login = '';

    #[ORM\Column(name: 'MDP', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $mdp = '';

    #[ORM\Column(name: 'CODEAMADEUS', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $codeamadeus = '';

    #[ORM\Column(name: 'ANNULATION_TECHNIQUE', type: Types::BOOLEAN, nullable: false, options: ['default' => 0])]
    private bool $annulationTechnique = false;

    #[ORM\Column(name: 'DELAI_AT', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $delaiAt = 0;

    #[ORM\Column(name: 'CARNETVOYAGE', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $carnetvoyage = 0;

    #[ORM\Column(name: 'ARCHIVER', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $archiver = 0;

    #[ORM\Column(name: 'LOGIN_GALILEO', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $loginGalileo = '';

    #[ORM\Column(name: 'MDP_GALILEO', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $mdpGalileo = '';

    #[ORM\Column(name: 'COULEUR', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $couleur = 0;

    #[ORM\Column(name: 'LIBCLASSIFICATION', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $libclassification = '';

    #[ORM\Column(name: 'CATEGORIE', type: Types::STRING, length: 2, nullable: false, options: ['default' => ''])]
    private string $categorie = '';

    #[ORM\Column(name: 'COMCOFFRET', type: Types::DECIMAL, precision: 7, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $comcoffret = '0.00';

    #[ORM\Column(name: 'login_adpack', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $loginAdpack = '';

    #[ORM\Column(name: 'mdp_adpack', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $mdpAdpack = '';

    #[ORM\Column(name: 'CODE_AGENCE', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $codeAgence = '';

    #[ORM\Column(name: 'COM_ANNUL', type: Types::INTEGER, nullable: false, options: ['default' => 1])]
    private int $comAnnul = 1;

    #[ORM\Column(name: 'TVA_INVISIBLE', type: Types::SMALLINT, nullable: false, options: ['default' => 0])]
    private int $tvaInvisible = 0;

    #[ORM\Column(name: 'SEQRESEAU', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqreseau = 0;

    #[ORM\Column(name: 'SEQSOUSRESEAU', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqsousreseau = 0;

    #[ORM\Column(name: 'SEQCOMMERCIAL', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqcommercial = 0;

    #[ORM\Column(name: 'SEQTYPEREGLE', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqtyperegle = 0;

    #[ORM\Column(name: 'SEQTYPECLT', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqtypeclt = 0;

    #[ORM\Column(name: 'SEQCOMM', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $seqcomm = 0;

    #[ORM\Column(name: 'LOGINBTOB', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $loginbtob = '';

    #[ORM\Column(name: 'MDPBTOB', type: Types::STRING, length: 20, nullable: false, options: ['default' => ''])]
    private string $mdpbtob = '';

    #[ORM\Column(name: 'ANALYTIQUE', type: Types::STRING, length: 14, nullable: false, options: ['default' => ''])]
    private string $analytique = '';

    #[ORM\Column(name: 'BASCULE_AUTO_REGLEMENT', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $basculeAutoReglement = 0;

    #[ORM\Column(name: 'DOC_LANGUE', type: Types::STRING, length: 2, nullable: false, options: ['default' => ''])]
    private string $docLangue = '';

    #[ORM\Column(name: 'ABREVIATION', type: Types::STRING, length: 30, nullable: false, options: ['default' => ''])]
    private string $abreviation = '';

    #[ORM\Column(name: 'LOGINBTOBVOL', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $loginbtobvol = '';

    #[ORM\Column(name: 'MDPBTOBVOL', type: Types::STRING, length: 10, nullable: false, options: ['default' => ''])]
    private string $mdpbtobvol = '';

    #[ORM\Column(name: 'PAIEMENTBTOBVOL', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $paiementbtobvol = 0;

    #[ORM\Column(name: 'TAXECLI', type: Types::DECIMAL, precision: 7, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private string $taxecli = '0.00';

    #[ORM\Column(name: 'seqcondition_client', type: Types::INTEGER, nullable: true, options: ['default' => 0])]
    private ?int $seqconditionClient = 0;

    #[ORM\Column(name: 'CODEPAYEUR', type: Types::STRING, length: 6, nullable: false, options: ['default' => ''])]
    private string $codepayeur = '';

    #[ORM\Column(name: 'BLACKLIST', type: Types::INTEGER, nullable: false, options: ['default' => 0])]
    private int $blacklist = 0;

    // ========== Constructor ==========
    public function __construct()
    {
        $this->datesaisie = new \DateTimeImmutable();
    }

    // ========== Helpers for decimals ==========
    private function formatDecimal($value, int $precision, int $scale): string
    {
        if ($value === null || $value === '') {
            return number_format(0, $scale, '.', '');
        }
        if (is_string($value)) {
            $value = str_replace(',', '.', $value);
        }
        $number = (float)$value;
        $maxValue = pow(10, $precision - $scale) - pow(10, -$scale);
        if ($number > $maxValue) {
            $number = $maxValue;
        }
        return number_format($number, $scale, '.', '');
    }

    // ========== Representative Getters/Setters (add others as needed) ==========
    public function getNumclt(): ?int { return $this->numclt; }

    public function getSeqclt(): string { return $this->seqclt; }
    public function setSeqclt(?string $v): self { $this->seqclt = $v ?? ''; return $this; }

    public function getNomreseau(): string { return $this->nomreseau; }
    public function setNomreseau(?string $v): self { $this->nomreseau = $v ?? ''; return $this; }

    public function getVille(): string { return $this->ville; }
    public function setVille(?string $v): self { $this->ville = $v ?? ''; return $this; }

    public function getPays(): string { return $this->pays; }
    public function setPays(?string $v): self { $this->pays = $v ?? ''; return $this; }

    public function getCommiss(): string { return $this->commiss; }
    public function setCommiss($v): self { $this->commiss = $this->formatDecimal($v, 6, 2); return $this; }

    public function getCommiss2(): string { return $this->commiss2; }
    public function setCommiss2($v): self { $this->commiss2 = $this->formatDecimal($v, 5, 2); return $this; }

    public function getCommiss3(): string { return $this->commiss3; }
    public function setCommiss3($v): self { $this->commiss3 = $this->formatDecimal($v, 5, 2); return $this; }

    public function getCommiss4(): string { return $this->commiss4; }
    public function setCommiss4($v): self { $this->commiss4 = $this->formatDecimal($v, 5, 2); return $this; }

    public function getFrais(): string { return $this->frais; }
    public function setFrais($v): self { $this->frais = $this->formatDecimal($v, 7, 2); return $this; }

    public function getTaxe(): string { return $this->taxe; }
    public function setTaxe($v): self { $this->taxe = $this->formatDecimal($v, 7, 2); return $this; }

    public function getTaxecli(): string { return $this->taxecli; }
    public function setTaxecli($v): self { $this->taxecli = $this->formatDecimal($v, 7, 2); return $this; }

    public function getDatesaisie(): \DateTimeInterface { return $this->datesaisie; }
    public function setDatesaisie(\DateTimeInterface $v): self { $this->datesaisie = $v; return $this; }

    /**
     * @return string
     */
    public function getSousreseau(): string
    {
        return $this->sousreseau;
    }

    /**
     * @param string $sousreseau
     */
    public function setSousreseau(string $sousreseau): void
    {
        $this->sousreseau = $sousreseau;
    }

    /**
     * @return int
     */
    public function getSeqcltpackdb(): int
    {
        return $this->seqcltpackdb;
    }

    /**
     * @param int $seqcltpackdb
     */
    public function setSeqcltpackdb(int $seqcltpackdb): void
    {
        $this->seqcltpackdb = $seqcltpackdb;
    }

    /**
     * @return string
     */
    public function getRefpackdb(): string
    {
        return $this->refpackdb;
    }

    /**
     * @param string $refpackdb
     */
    public function setRefpackdb(string $refpackdb): void
    {
        $this->refpackdb = $refpackdb;
    }

    /**
     * @return string
     */
    public function getNomclt(): string
    {
        return $this->nomclt;
    }

    /**
     * @param string $nomclt
     */
    public function setNomclt(string $nomclt): void
    {
        $this->nomclt = $nomclt;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getTel1(): string
    {
        return $this->tel1;
    }

    /**
     * @param string $tel1
     */
    public function setTel1(string $tel1): void
    {
        $this->tel1 = $tel1;
    }

    /**
     * @return string
     */
    public function getTel2(): string
    {
        return $this->tel2;
    }

    /**
     * @param string $tel2
     */
    public function setTel2(string $tel2): void
    {
        $this->tel2 = $tel2;
    }

    /**
     * @return string
     */
    public function getTel3(): string
    {
        return $this->tel3;
    }

    /**
     * @param string $tel3
     */
    public function setTel3(string $tel3): void
    {
        $this->tel3 = $tel3;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax(string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPatron(): string
    {
        return $this->patron;
    }

    /**
     * @param string $patron
     */
    public function setPatron(string $patron): void
    {
        $this->patron = $patron;
    }

    /**
     * @return string
     */
    public function getContact(): string
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact(string $contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return string
     */
    public function getCcompta(): string
    {
        return $this->ccompta;
    }

    /**
     * @param string $ccompta
     */
    public function setCcompta(string $ccompta): void
    {
        $this->ccompta = $ccompta;
    }

    /**
     * @return int
     */
    public function getComttc(): int
    {
        return $this->comttc;
    }

    /**
     * @param int $comttc
     */
    public function setComttc(int $comttc): void
    {
        $this->comttc = $comttc;
    }

    /**
     * @return string
     */
    public function getObs(): string
    {
        return $this->obs;
    }

    /**
     * @param string $obs
     */
    public function setObs(string $obs): void
    {
        $this->obs = $obs;
    }

    /**
     * @return int
     */
    public function getLibre(): int
    {
        return $this->libre;
    }

    /**
     * @param int $libre
     */
    public function setLibre(int $libre): void
    {
        $this->libre = $libre;
    }

    /**
     * @return int
     */
    public function getConfirmation(): int
    {
        return $this->confirmation;
    }

    /**
     * @param int $confirmation
     */
    public function setConfirmation(int $confirmation): void
    {
        $this->confirmation = $confirmation;
    }

    /**
     * @return string
     */
    public function getCodecommercial(): string
    {
        return $this->codecommercial;
    }

    /**
     * @param string $codecommercial
     */
    public function setCodecommercial(string $codecommercial): void
    {
        $this->codecommercial = $codecommercial;
    }

    /**
     * @return string
     */
    public function getLibtyperegle(): string
    {
        return $this->libtyperegle;
    }

    /**
     * @param string $libtyperegle
     */
    public function setLibtyperegle(string $libtyperegle): void
    {
        $this->libtyperegle = $libtyperegle;
    }

    /**
     * @return int
     */
    public function getPaiement(): int
    {
        return $this->paiement;
    }

    /**
     * @param int $paiement
     */
    public function setPaiement(int $paiement): void
    {
        $this->paiement = $paiement;
    }

    /**
     * @return string
     */
    public function getCompta(): string
    {
        return $this->compta;
    }

    /**
     * @param string $compta
     */
    public function setCompta(string $compta): void
    {
        $this->compta = $compta;
    }

    /**
     * @return string
     */
    public function getConvoc(): string
    {
        return $this->convoc;
    }

    /**
     * @param string $convoc
     */
    public function setConvoc(string $convoc): void
    {
        $this->convoc = $convoc;
    }

    /**
     * @return string
     */
    public function getResa(): string
    {
        return $this->resa;
    }

    /**
     * @param string $resa
     */
    public function setResa(string $resa): void
    {
        $this->resa = $resa;
    }

    /**
     * @return string
     */
    public function getTyperegle(): string
    {
        return $this->typeregle;
    }

    /**
     * @param string $typeregle
     */
    public function setTyperegle(string $typeregle): void
    {
        $this->typeregle = $typeregle;
    }

    /**
     * @return string
     */
    public function getLibtypeclt(): string
    {
        return $this->libtypeclt;
    }

    /**
     * @param string $libtypeclt
     */
    public function setLibtypeclt(string $libtypeclt): void
    {
        $this->libtypeclt = $libtypeclt;
    }

    /**
     * @return int
     */
    public function getCcredit(): int
    {
        return $this->ccredit;
    }

    /**
     * @param int $ccredit
     */
    public function setCcredit(int $ccredit): void
    {
        $this->ccredit = $ccredit;
    }

    /**
     * @return string
     */
    public function getAdresse2(): string
    {
        return $this->adresse2;
    }

    /**
     * @param string $adresse2
     */
    public function setAdresse2(string $adresse2): void
    {
        $this->adresse2 = $adresse2;
    }

    /**
     * @return string
     */
    public function getPrincipal(): string
    {
        return $this->principal;
    }

    /**
     * @param string $principal
     */
    public function setPrincipal(string $principal): void
    {
        $this->principal = $principal;
    }

    /**
     * @return int
     */
    public function getPointcom(): int
    {
        return $this->pointcom;
    }

    /**
     * @param int $pointcom
     */
    public function setPointcom(int $pointcom): void
    {
        $this->pointcom = $pointcom;
    }

    /**
     * @return int
     */
    public function getRefunique(): int
    {
        return $this->refunique;
    }

    /**
     * @param int $refunique
     */
    public function setRefunique(int $refunique): void
    {
        $this->refunique = $refunique;
    }

    /**
     * @return string
     */
    public function getGroupeclient(): string
    {
        return $this->groupeclient;
    }

    /**
     * @param string $groupeclient
     */
    public function setGroupeclient(string $groupeclient): void
    {
        $this->groupeclient = $groupeclient;
    }

    /**
     * @return int
     */
    public function getLitige(): int
    {
        return $this->litige;
    }

    /**
     * @param int $litige
     */
    public function setLitige(int $litige): void
    {
        $this->litige = $litige;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getMdp(): string
    {
        return $this->mdp;
    }

    /**
     * @param string $mdp
     */
    public function setMdp(string $mdp): void
    {
        $this->mdp = $mdp;
    }

    /**
     * @return string
     */
    public function getCodeamadeus(): string
    {
        return $this->codeamadeus;
    }

    /**
     * @param string $codeamadeus
     */
    public function setCodeamadeus(string $codeamadeus): void
    {
        $this->codeamadeus = $codeamadeus;
    }

    /**
     * @return bool
     */
    public function isAnnulationTechnique(): bool
    {
        return $this->annulationTechnique;
    }

    /**
     * @param bool $annulationTechnique
     */
    public function setAnnulationTechnique(bool $annulationTechnique): void
    {
        $this->annulationTechnique = $annulationTechnique;
    }

    /**
     * @return int
     */
    public function getDelaiAt(): int
    {
        return $this->delaiAt;
    }

    /**
     * @param int $delaiAt
     */
    public function setDelaiAt(int $delaiAt): void
    {
        $this->delaiAt = $delaiAt;
    }

    /**
     * @return int
     */
    public function getCarnetvoyage(): int
    {
        return $this->carnetvoyage;
    }

    /**
     * @param int $carnetvoyage
     */
    public function setCarnetvoyage(int $carnetvoyage): void
    {
        $this->carnetvoyage = $carnetvoyage;
    }

    /**
     * @return int
     */
    public function getArchiver(): int
    {
        return $this->archiver;
    }

    /**
     * @param int $archiver
     */
    public function setArchiver(int $archiver): void
    {
        $this->archiver = $archiver;
    }

    /**
     * @return string
     */
    public function getLoginGalileo(): string
    {
        return $this->loginGalileo;
    }

    /**
     * @param string $loginGalileo
     */
    public function setLoginGalileo(string $loginGalileo): void
    {
        $this->loginGalileo = $loginGalileo;
    }

    /**
     * @return string
     */
    public function getMdpGalileo(): string
    {
        return $this->mdpGalileo;
    }

    /**
     * @param string $mdpGalileo
     */
    public function setMdpGalileo(string $mdpGalileo): void
    {
        $this->mdpGalileo = $mdpGalileo;
    }

    /**
     * @return int
     */
    public function getCouleur(): int
    {
        return $this->couleur;
    }

    /**
     * @param int $couleur
     */
    public function setCouleur(int $couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return string
     */
    public function getLibclassification(): string
    {
        return $this->libclassification;
    }

    /**
     * @param string $libclassification
     */
    public function setLibclassification(string $libclassification): void
    {
        $this->libclassification = $libclassification;
    }

    /**
     * @return string
     */
    public function getCategorie(): string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getComcoffret(): string
    {
        return $this->comcoffret;
    }

    /**
     * @param string $comcoffret
     */
    public function setComcoffret(string $comcoffret): void
    {
        $this->comcoffret = $comcoffret;
    }

    /**
     * @return string
     */
    public function getLoginAdpack(): string
    {
        return $this->loginAdpack;
    }

    /**
     * @param string $loginAdpack
     */
    public function setLoginAdpack(string $loginAdpack): void
    {
        $this->loginAdpack = $loginAdpack;
    }

    /**
     * @return string
     */
    public function getMdpAdpack(): string
    {
        return $this->mdpAdpack;
    }

    /**
     * @param string $mdpAdpack
     */
    public function setMdpAdpack(string $mdpAdpack): void
    {
        $this->mdpAdpack = $mdpAdpack;
    }

    /**
     * @return string
     */
    public function getCodeAgence(): string
    {
        return $this->codeAgence;
    }

    /**
     * @param string $codeAgence
     */
    public function setCodeAgence(string $codeAgence): void
    {
        $this->codeAgence = $codeAgence;
    }

    /**
     * @return int
     */
    public function getComAnnul(): int
    {
        return $this->comAnnul;
    }

    /**
     * @param int $comAnnul
     */
    public function setComAnnul(int $comAnnul): void
    {
        $this->comAnnul = $comAnnul;
    }

    /**
     * @return int
     */
    public function getTvaInvisible(): int
    {
        return $this->tvaInvisible;
    }

    /**
     * @param int $tvaInvisible
     */
    public function setTvaInvisible(int $tvaInvisible): void
    {
        $this->tvaInvisible = $tvaInvisible;
    }

    /**
     * @return int
     */
    public function getSeqreseau(): int
    {
        return $this->seqreseau;
    }

    /**
     * @param int $seqreseau
     */
    public function setSeqreseau(int $seqreseau): void
    {
        $this->seqreseau = $seqreseau;
    }

    /**
     * @return int
     */
    public function getSeqsousreseau(): int
    {
        return $this->seqsousreseau;
    }

    /**
     * @param int $seqsousreseau
     */
    public function setSeqsousreseau(int $seqsousreseau): void
    {
        $this->seqsousreseau = $seqsousreseau;
    }

    /**
     * @return int
     */
    public function getSeqcommercial(): int
    {
        return $this->seqcommercial;
    }

    /**
     * @param int $seqcommercial
     */
    public function setSeqcommercial(int $seqcommercial): void
    {
        $this->seqcommercial = $seqcommercial;
    }

    /**
     * @return int
     */
    public function getSeqtyperegle(): int
    {
        return $this->seqtyperegle;
    }

    /**
     * @param int $seqtyperegle
     */
    public function setSeqtyperegle(int $seqtyperegle): void
    {
        $this->seqtyperegle = $seqtyperegle;
    }

    /**
     * @return int
     */
    public function getSeqtypeclt(): int
    {
        return $this->seqtypeclt;
    }

    /**
     * @param int $seqtypeclt
     */
    public function setSeqtypeclt(int $seqtypeclt): void
    {
        $this->seqtypeclt = $seqtypeclt;
    }

    /**
     * @return int
     */
    public function getSeqcomm(): int
    {
        return $this->seqcomm;
    }

    /**
     * @param int $seqcomm
     */
    public function setSeqcomm(int $seqcomm): void
    {
        $this->seqcomm = $seqcomm;
    }

    /**
     * @return string
     */
    public function getLoginbtob(): string
    {
        return $this->loginbtob;
    }

    /**
     * @param string $loginbtob
     */
    public function setLoginbtob(string $loginbtob): void
    {
        $this->loginbtob = $loginbtob;
    }

    /**
     * @return string
     */
    public function getMdpbtob(): string
    {
        return $this->mdpbtob;
    }

    /**
     * @param string $mdpbtob
     */
    public function setMdpbtob(string $mdpbtob): void
    {
        $this->mdpbtob = $mdpbtob;
    }

    /**
     * @return string
     */
    public function getAnalytique(): string
    {
        return $this->analytique;
    }

    /**
     * @param string $analytique
     */
    public function setAnalytique(string $analytique): void
    {
        $this->analytique = $analytique;
    }

    /**
     * @return int
     */
    public function getBasculeAutoReglement(): int
    {
        return $this->basculeAutoReglement;
    }

    /**
     * @param int $basculeAutoReglement
     */
    public function setBasculeAutoReglement(int $basculeAutoReglement): void
    {
        $this->basculeAutoReglement = $basculeAutoReglement;
    }

    /**
     * @return string
     */
    public function getDocLangue(): string
    {
        return $this->docLangue;
    }

    /**
     * @param string $docLangue
     */
    public function setDocLangue(string $docLangue): void
    {
        $this->docLangue = $docLangue;
    }

    /**
     * @return string
     */
    public function getAbreviation(): string
    {
        return $this->abreviation;
    }

    /**
     * @param string $abreviation
     */
    public function setAbreviation(string $abreviation): void
    {
        $this->abreviation = $abreviation;
    }

    /**
     * @return string
     */
    public function getLoginbtobvol(): string
    {
        return $this->loginbtobvol;
    }

    /**
     * @param string $loginbtobvol
     */
    public function setLoginbtobvol(string $loginbtobvol): void
    {
        $this->loginbtobvol = $loginbtobvol;
    }

    /**
     * @return string
     */
    public function getMdpbtobvol(): string
    {
        return $this->mdpbtobvol;
    }

    /**
     * @param string $mdpbtobvol
     */
    public function setMdpbtobvol(string $mdpbtobvol): void
    {
        $this->mdpbtobvol = $mdpbtobvol;
    }

    /**
     * @return int
     */
    public function getPaiementbtobvol(): int
    {
        return $this->paiementbtobvol;
    }

    /**
     * @param int $paiementbtobvol
     */
    public function setPaiementbtobvol(int $paiementbtobvol): void
    {
        $this->paiementbtobvol = $paiementbtobvol;
    }

    /**
     * @return int|null
     */
    public function getSeqconditionClient(): ?int
    {
        return $this->seqconditionClient;
    }

    /**
     * @param int|null $seqconditionClient
     */
    public function setSeqconditionClient(?int $seqconditionClient): void
    {
        $this->seqconditionClient = $seqconditionClient;
    }

    /**
     * @return string
     */
    public function getCodepayeur(): string
    {
        return $this->codepayeur;
    }

    /**
     * @param string $codepayeur
     */
    public function setCodepayeur(string $codepayeur): void
    {
        $this->codepayeur = $codepayeur;
    }

    /**
     * @return int
     */
    public function getBlacklist(): int
    {
        return $this->blacklist;
    }

    /**
     * @param int $blacklist
     */
    public function setBlacklist(int $blacklist): void
    {
        $this->blacklist = $blacklist;
    }

}
