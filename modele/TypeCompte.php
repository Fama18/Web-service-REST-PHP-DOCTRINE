<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="TypeCompte")
 **/
class TypeCompte {
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
     * Many TypeCompte have Many Comptes.
     * @ORM\ManyToMany(targetEntity="Compte", inversedBy="TypeComptes")
     * @ORM\JoinTable(name="TypeCompte_Compte")
     */
    private $Comptes;

    public function __construct() {
        $this->Comptes = new ArrayCollection();
    }
    //getteurs
    public function getId() {
        return $this->id;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function getComptes() {
        return $this->Comptes;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    public function setComptes($Comptes) {
        $this->Comptes = $Comptes;
    }
}
?>