<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="ClientMoral")
 **/
class ClientMoral {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nomEmployeur;
    /**
     * @ORM\Column(type="string")
     */
    private $AdresseEmployeur;
    /**
     * @ORM\Column(type="string")
     */
    private $raisonSocial;
    /**
     * @ORM\Column(type="string")
     */
    private $numIdent;
    /**
     * One ClientMoral has many ClientPhysiques. This is the inverse side.
     * @ORM\OneToMany(targetEntity="ClientPhysique", mappedBy="clientMoral")
     */
    private $ClientPhysiques;
    /**
     * One ClientMoral has many Comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="clientMoral")
     */
    private $Comptes;

    public function __construct() {
        $this->ClientPhysiques = new ArrayCollection();
        $this->Comptes = new ArrayCollection();
    }
    //fonctions de recupération des différents attributs
    public function getIdClientMoral() {
        return $this->idClientMoral;
    }
    public function getNomEmployeur() {
        return $this->nomEmployeur;
    }
    public function getAdresseEmployeur() {
        return $this->AdresseEmployeur;
    }
    public function getRaisonSocial() {
        return $this->raisonSocial;
    }
    public function getNumIdent() {
        return $this->numIdent;
    }
    public function getClientPhysiques() {
        return $this->ClientPhysiques;
    }
    public function getComptes() {
        return $this->Comptes;
    }


    //setteurs
    public function setIdClientMoral($idClientMoral) {
        $this->idClientMoral = $idClientMoral;
    }
    public function setNomEmployeur($nomEmployeur) {
        $this->nomEmployeur = $nomEmployeur;
    }
    public function setAdresseEmployeur($AdresseEmployeur) {
        $this->AdresseEmployeur = $AdresseEmployeur;
    }
    public function setRaisonSocial($raisonSocial) {
        $this->raisonSocial = $raisonSocial;
    }
    public function setNumIdent($numIdent) {
        $this->numIdent = $numIdent;
    }
    public function setClientPhysiques($ClientPhysiques) {
        $this->ClientPhysiques = $ClientPhysiques;
    }
    public function setComptes($Comptes) {
        $this->Comptes = $Comptes;
    }
}
?>
