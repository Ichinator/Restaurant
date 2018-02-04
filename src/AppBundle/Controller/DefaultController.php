<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/access", name="access")
     */
    public function accessAction(Request $request)
    {

        return $this->render('default/access.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $name = $form['name']->getData();
            $email = $form['email']->getData();
            $subject = $form['subject']->getData();
            $message = $form['message']->getData();

            # set form data

            $contact->setName($name);
            $contact->setEmail($email);
            $contact->setSubject($subject);
            $contact->setMessage($message);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();



            $message = \Swift_Message::newInstance()

                ->setSubject($subject)
                ->setFrom('lazonegeek1@gmail.com')
                ->setTo($email)
                ->setBody($this->renderView('default/sendmail.html.twig',array('name' => $name)),'text/html');

            $this->get('mailer')->send($message);
            return $this->redirectToRoute('homepage');
        }
        $formView = $form->createView();
        return $this->render('default/contact.html.twig', array('form' => $formView));
    }
}
