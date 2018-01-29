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

    /**
     * @Route("/showOnePlat/{id}", name="showOnePlat", requirements={"id"="\d+"})
     */
    public function showOneEmployeeAction($id)
    {
        $onePlat = $this->getDoctrine()->getManager()->getRepository(Plats::Class)->find($id);
        return $this->render('default/onePlat.html.twig', array('onePlat'=>$onePlat));
    }

    /**
     * @Route("/showOneEntree/{id}", name="showOneEntree", requirements={"id"="\d+"})
     */
    public function showOneEntreeAction($id)
    {
        $oneEntree = $this->getDoctrine()->getManager()->getRepository(Entrees::Class)->find($id);
        return $this->render('default/oneEntree.html.twig', array('oneEntree'=>$oneEntree));
    }

    /**
     * @Route("/showOneBoisson/{id}", name="showOneBoisson", requirements={"id"="\d+"})
     */
    public function showOneBoissonAction($id)
    {
        $oneBoisson = $this->getDoctrine()->getManager()->getRepository(Boissons::Class)->find($id);
        return $this->render('default/oneBoisson.html.twig', array('oneBoisson'=>$oneBoisson));
    }

    /**
     * @Route("/showOneDessert/{id}", name="showOneDessert", requirements={"id"="\d+"})
     */
    public function showOneDessertAction($id)
    {
        $oneDessert = $this->getDoctrine()->getManager()->getRepository(Desserts::Class)->find($id);
        return $this->render('default/oneDessert.html.twig', array('oneDessert'=>$oneDessert));
    }

}

?>