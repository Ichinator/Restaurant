<?php

namespace AppBundle\Controller;

use AppBundle\Form\MailType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Mail;
//use AppBundle\Entity\User;
use FOS\UserBundle\Model\User;


class MailController extends Controller
{
    /**
     * @Route("/admin/writeMail/", name="writeMail")
     */
    public function writeMailAction(Request $request){
        $mail = new Mail();
        $form =$this->createForm(MailType::class, $mail);
        $form->handleRequest($request);

        /*if ($form->isSubmitted() && $form->isValid()) {
            $subject = $form['subject']->getData();
            $content = $form['content']->getData();

            # set form data

            $mail->setSubject($subject);
            $mail->setContent($content);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($mail);
            $sn->flush();

            $newsletter = $this->getDoctrine()->getManager()->getRepository(User::Class)->find($email);

            $message = \Swift_Message::newInstance()

                ->setSubject($subject)
                ->setFrom('lazonegeek1@gmail.com')
                ->setTo($email)
                ->setBody($this->renderView('default/sendNewsletter.html.twig',array('content' => $content)),'text/html');

            $this->get('mailer')->send($message);
            return $this->redirectToRoute('admin');
        }*/
        $formView = $form->createView();
        return $this->render('default/writeMail.html.twig', array('form'=>$formView));

    }
}