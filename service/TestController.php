<?php

class TestController {
    public function getAllOperations($numcompte) {

        header('Content-Type: application/json'); //precise le type de retour
        header('Access-control-Allow-Origin: *'); //indique qui peut acceder à ces ressources
        require_once "./bootstrap.php";
        /* $dql = "SELECT c.solde FROM Compte c
                WHERE c.NumCompte = ".$numcompte;
        $solde = $entityManager->createQuery($dql)->getResult(); */

        $query = $entityManager->createQuery("SELECT o
                                                FROM Operation o JOIN o.compte c 
                                                WHERE c.NumCompte =:numero
                                                ")->setParameter('numero',$numcompte)->getResult();;

        //$operation = $query->getResult();
        /* var_dump($operation);
        die; */
        $i=0;
        $tab =[];
        foreach($query as $op) {
            $data = [
            'id' => $op->getId(),
            'libelle' => $op->getLibelle(),
            'dateOperation' => $op->getDateOperation(),
            'compte' => $op->getCompte()->getNumCompte(),
            'TypeOperation' => $op->getTypeOperation()->getLibelle(),
            ];
            $tab[$i]=$data;
            $i++;
        }

        echo json_encode($tab);
    }

    public function getSoldeCompte($numcompte) {

        header('Content-Type: application/json'); //precise le type de retour
        header('Access-control-Allow-Origin: *'); //indique qui peut acceder à ces ressources
        require_once "./bootstrap.php";
        /* $dql = "SELECT c.solde FROM Compte c
                WHERE c.NumCompte = ".$numcompte;
        $solde = $entityManager->createQuery($dql)->getResult(); */

        $query = $entityManager->createQuery("SELECT c.solde FROM Compte c WHERE c.NumCompte = ".$numcompte);
        $solde = $query->getResult();
        /* var_dump($solde);
        die(); */

        echo json_encode($solde);

    }
}
?>
