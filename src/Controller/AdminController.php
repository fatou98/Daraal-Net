<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
      * Lister New Commande
      *
      * @Route("", name="list of New Commande")
      */
      public function ListOfNewCommande()
      {

          $em = $this->getDoctrine()->getManager();
          $commande= $em->getRepository(Commandes::class)->findCommandes(0);
        
                if(empty($commande))
                    {
                          return $this->render('admin/modules/ListOfNewCommande.html.twig', array(
                            "Désolé il n'y aucune commande disponible" => $commande));
                    };
                if(!empty($commande)){
                         return $this->render('admin/modules/ListOfNewCommande.html.twig', array(
                            'commande' => $commande));
                    }

        }
            
        
    /**
      * Lister Commande Approved
      *
      * @Route("", name="list of  Commande Approved")
      */
      public function ListOfCommandeApproved()
      {

        $em = $this->getDoctrine()->getManager();
        $commande= $em->getRepository(Commandes::class)->findCommandes(1);
        
             if(empty($commande))
                      {
    
                        return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                            "Désolé il n'y aucune commande disponible" => $commande));
                    };
             if(!empty($commande)){

                    return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                        'commande' => $commande));
                    };
        }

/**
      * Lister les Utilisateurs
      *
      * @Route("", name="list of  Utilisateur")
      */
      public function ListOfUtilisateur()
      {

        $em = $this->getDoctrine()->getManager();
        $Utilisateurs= $em->getRepository(Utilisateurs::class)->findAll();
        
             if(empty($Utilisateurs))
                      {
    
                        return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                            "Désolé il n'y aucune commande disponible" => $Utilisateurs));
                    };
             if(!empty($Utilisateurs)){

                    return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                        'commande' => $Utilisateurs));
                    };
    }


    /**
      * Rechercher Utilisateur Par nom
      *
      * @Route("", name="Found  Utilisateur")
      */
      public function FoundUtilisateur()
      {

        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            extract($_POST);
        $Utilisateurs= $em->getRepository(Utilisateurs::class)->findfindOneByNomComplet($nomcomplet);
        
             if(empty($Utilisateurs))
                      {
    
                        return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                            "Désolé il n'y aucune commande disponible" => $Utilisateurs));
                    };
             if(!empty($Utilisateurs)){

                    return $this->render('admin/modules/ListofApprovedCommande.twig', array(
                        'commande' => $Utilisateurs));
                    };
    }
    
    }

}
