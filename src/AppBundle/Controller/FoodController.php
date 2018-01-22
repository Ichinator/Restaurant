<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Entrees;
use AppBundle\Entity\Plats;
use AppBundle\Entity\Desserts;
use AppBundle\Entity\Boissons;

class FoodController extends Controller{
    /**
     * @Route("/showEntrees", name="entrees")
     */
    public function showEntreesAction(Request $request){

        $entrees = $this->getDoctrine()
            ->getRepository(Entrees::class)
            ->findAll();

        return $this->render('default/entrees.html.twig', array(
            'entrees' => $entrees
        ));
    }

/**
 * @Route("/showPlats", name="plats")
 */
public function showPlatsAction(Request $request){

    $plats = $this->getDoctrine()
        ->getRepository(Plats::class)
        ->findAll();

    return $this->render('default/plats.html.twig', array(
        'plats' => $plats
    ));
    }

    /**
     * @Route("/showDesserts", name="desserts")
     */
    public function showDessertsAction(Request $request){

        $desserts = $this->getDoctrine()
            ->getRepository(Desserts::class)
            ->findAll();

        return $this->render('default/desserts.html.twig', array(
            'desserts' => $desserts
        ));
    }

    /**
     * @Route("/showBoissons", name="boissons")
     */
    public function showBoissonsAction(Request $request){

        $boissons = $this->getDoctrine()
            ->getRepository(Boissons::class)
            ->findAll();

        return $this->render('default/boissons.html.twig', array(
            'boissons' => $boissons
        ));
    }

}

?>