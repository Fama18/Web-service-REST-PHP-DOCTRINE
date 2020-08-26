<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Operation")
 **/
class Operation {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $libelle;
    /**
     * Many Operation have one Compte. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Compte", inversedBy="Operations")
     * @ORM\JoinColumn(name="Compte_id", referencedColumnName="id")
     */
    private $compte;
    /**
     * Many Operation have one TypeOperation. This is the owning side.
     * @ORM\ManyToOne(targetEntity="TypeOperation", inversedBy="Operations")
     * @ORM\JoinColumn(name="TypeOperation_id", referencedColumnName="id")
     */
    private $TypeOperation;


    public function __construct() {

    }
    //getteurs
    public function getId() {
        return $this->id;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function getCompte() {
        return $this->compte;
    }
    public function getTypeOperation() {
        return $this->TypeOperation;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    public function setCompte($compte) {
        $this->compte = $compte;
    }
    public function setTypeOperation($TypeOperation) {
        $this->TypeOperation = $TypeOperation;
    }
}