<?php

class TestController {
    public function getAllOperations() {

        header('Content-Type: application/json');
        require_once "bootstrap.php";



        echo json_encode($response);
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
        /* var_dump($entityManager);
        die(); */

        echo json_encode($solde);

    }
}
?>
