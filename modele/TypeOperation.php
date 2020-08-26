<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="TypeOperation")
 **/
class TypeOperation {
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
     * One TypeOperation has many Operations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Operation", mappedBy="TypeOperation")
     */
    private $Operations;

    public function __construct() {
        $this->Operations = new ArrayCollection();
    }
    //getteurs
    public function getId() {
        return $this->id;
    }
    public function getLibelle() {
        return $this->libelle;
    }
    public function getOperations() {
        return $this->Operations;
    }

    //setteurs
    public function setId($id) {
        $this->id = $id;
    }
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    public function setOperations($Operations) {
        $this->Operations = $Operations;
    }
}
?>