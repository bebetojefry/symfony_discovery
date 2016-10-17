<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $datatable = $this->get('app.datatable.user');
        $datatable->buildDatatable();
        // replace this example code with whatever you need
        return $this->render('AppBundle:index:index.html.twig', array(
            'datatable' => $datatable
        ));
    }
    
    /**
     * @Route("/results", name="user_results")
     */
    public function indexResultsAction()
    {
        $datatable = $this->get('app.datatable.user');
        $datatable->buildDatatable();

        $query = $this->get('sg_datatables.query')->getQueryFrom($datatable);

        return $query->getResponse();
    }
    
    /**
     * Displays an existing User entity.
     *
     * @Route("/show", name="user_show", options={"expose"=true})
     * @Method({"GET"})
     */
    public function showAction(Request $request)
    {
        // ...
    }
    
    /**
     * Displays a form to add an existing User entity.
     *
     * @Route("/new", name="user_new", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        // ...
    }
    
    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        // ...
    }
}
