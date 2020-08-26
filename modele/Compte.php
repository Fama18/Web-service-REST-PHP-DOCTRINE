<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Compte")
 **/
class Compte {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $numagence;
    /**
     * @ORM\Column(type="string")
     */
    private $cleRib;
    /**
     * @ORM\Column(type="string")
     */
    private $NumCompte;
    /**
     * @ORM\Column(type="integer")
     */
    private $solde;
    /**
     * Many Compte have one ClientPhysique. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientPhysique", inversedBy="Comptes")
     * @ORM\JoinColumn(name="ClientPhysique_id", referencedColumnName="id")
     */
    private $clientPhysique;
    /**
     * Many Compte have one ClientMoral. This is the owning side.
     * @ORM\ManyToOne(targetEntity="ClientMoral", inversedBy="Comptes")
     * @ORM\JoinColumn(name="ClientMoral_id", referencedColumnName="id")
     */
    private $clientMoral;
    /**
     * Many Comptes have Many TypeComptes.
     * @ORM\ManyToMany(targetEntity="TypeCompte", mappedBy="Comptes")
     */
    private $TypeComptes;
    /**
     * One Compte has many Operations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="compte")
     */
    private $Operations;

    public function __construct() {
        $this->TypeComptes = new ArrayCollection();
        $this->Operations = new ArrayCollection();
    }
     //getteurs
    public function getId() {
        return $this->id;
    }
     public function getNumAgence() {
        return $this->numagence;
    }
    public function getCleRib() {
        return $this->cleRib;
    }
    public function getNumCompte() {
        return $this->NumCompte;
    }
    public function getClientPhysique() {
        return $this->clientPhysique;
    }
    public function getClientMoral() {
        return $this->clientMoral;
    }
    public function getTypeComptes() {
        return $this->TypeComptes;
    }
    public function getOperations() {
        return $this->Operations;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setNumAgence($numagence) {
        $this->numagence = $numagence;
    }
    public function setCleRib($cleRib) {
        $this->cleRib = $cleRib;
    }
    public function setNumCompte($NumCompte) {
        $this->NumCompte = $NumCompte;
    }
    public function setClientPhysique($clientPhysique) {
        $this->clientPhysique = $clientPhysique;
    }
    public function setClientMoral($clientMoral) {
        $this->clientMoral = $clientMoral;
    }
    public function setTypeComptes($TypeComptes) {
        $this->TypeComptes = $TypeComptes;
    }
    public function setOperations($Operations) {
        $this->Operations = $Operations;
    }
}
?>