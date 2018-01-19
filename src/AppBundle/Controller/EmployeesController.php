<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Employees;

class EmployeesController extends Controller{
    /**
     * @Route("/showEmployees", name="employees")
     */
    public function showAction(Request $request){
        /*$repository=$this->getDoctrine()->getRepository('AppBundle:Employees');
        $allemployees = $repository->findAll();
        return $this->render('default/employees.html.twig', array('news'=>$allemployees));*/

        $employees = $this->getDoctrine()
            ->getRepository(Employees::class)
            ->findAll();

        return $this->render('default/employees.html.twig', array(
            'employees' => $employees
        ));
    }
}

?>