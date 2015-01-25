<?php

namespace Quickstart\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AccountController
 * @package Quickstart\AppBundle\Controller
 */
class AccountController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('QuickstartAppBundle:Account:index.html.twig',
            array(

            )
        );
    }

}
