<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="visitorhomepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/general", name="homepage")
     */
    public function generalAction()
    {
        return $this->render('default/general.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $helper = $this->get('security.authentication_utils');

        return $this->render('default/login.html.twig', [
            'error' => $helper->getLastAuthenticationError(),
            ''
        ]);
    }

    /**
     * @Route("/check", name="check")
     * @Route("/logout", name="logout")
     */
    public function checkAction()
    {
    }
}
