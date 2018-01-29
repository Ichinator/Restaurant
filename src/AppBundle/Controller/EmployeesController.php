<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Employees;

class EmployeesController extends Controller{
    /**
     * @Route("/showEmployees/", name="employees")
     */
    public function showAction(Request $request){

        $employees = $this->getDoctrine()
            ->getRepository(Employees::class)
            ->findAll();

        return $this->render('default/employees.html.twig', array(
            'employees' => $employees
        ));
    }

    /**
     * @Route("/showOneEmployee/{id}", name="showOneEmployee", requirements={"id"="\d+"})
     */
    public function showOneEmployeeAction($id)
    {
        $oneEmployee = $this->getDoctrine()->getManager()->getRepository(Employees::Class)->find($id);
        return $this->render('default/oneEmployee.html.twig', array('oneEmployee'=>$oneEmployee));
    }
}

?>