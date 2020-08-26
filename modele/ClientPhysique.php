<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="ClientPhysique")
 **/
class ClientPhysique {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $numCni;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $civilite;
   /**
     * @ORM\Column(type="string")
     */
    private $DateDeNaissance;
    /**
     * @ORM\Column(type="string")
     */
    private $adresse;
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    /**
     * @ORM\Column(type="string")
     */
    private $telephone;
     /**
     * Many ClientPhysique have one ClientMoral. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientMoral", inversedBy="ClientPhysiques")
     * @ORM\JoinColumn(name="ClientMoral_id", referencedColumnName="id")
     */
    private $clientMoral;
    /**
     * One ClientPhysique has many Comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="clientPhysique")
     */
    private $Comptes;

    public function __construct() {
        $this->Comptes = new ArrayCollection();
    }
    //getteurs et setteurs

    public function getIdClientPhysique() {
        return $this->idClientPhysique;
    }
    public function setIdClientPhysique($idClientPhysique) {
        $this->idClientPhysique = $idClientPhysique;
    }
    public function getNumCni() {
        return $this->numCni;
    }
    public function setNumCni($numCni) {
        $this->numCni = $numCni;
    }
    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
    public function getCivilite() {
        return $this->civilite;
    }
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
    }
    public function getDateDeNaissance() {
        return $this->DateDeNaissance;
    }
    public function setDateDeNaissance($DateDeNaissance) {
        $this->DateDeNaissance = $DateDeNaissance;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelephone() {
        return $this->telephone;
    }
    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
    public function getClientMoral() {
        return $this->clientMoral;
    }
    public function setClientMoral($clientMoral) {
        $this->clientMoral = $clientMoral;
    }
    public function getComptes() {
        return $this->Comptes;
    }
    public function setComptes($Comptes) {
        $this->Comptes = $Comptes;
    }

}
?>
