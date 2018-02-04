<?php
/**
 * Created by PhpStorm.
 * User: ichinator
 * Date: 29/01/18
 * Time: 23:37
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\News;
use AppBundle\Form\NewsType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    /**
     * @Route("/admin/createNews", name="createNews")
     */

    public function addNewsAction(Request $request){
    $news = new News();
    $form =$this->createForm(NewsType::class, $news);

    $form->handleRequest($request);

    if($form->isSubmitted()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($news);
        $em->flush();

        return new Response('Article créé');
    }

    $formView = $form->createView();
    return $this->render('default/createNews.html.twig', array('form'=>$formView));


    }

    /**
     * @Route("/showNews/", name="showNews")
     */
    public function showNewsAction(Request $request){

        $news = $this->getDoctrine()
            ->getRepository(News::class)
            ->findAll();

        return $this->render('default/news.html.twig', array(
            'news' => $news
        ));
    }

    /**
     * @Route("/showOneNews/{id}", name="showOneNews", requirements={"id"="\d+"})
     */
    public function showOneNewsAction($id)
    {
        $oneNews = $this->getDoctrine()->getManager()->getRepository(News::Class)->find($id);
        return $this->render('default/oneNews.html.twig', array('oneNews'=>$oneNews));
    }
}