<?php
/**
 * Created by PhpStorm.
 * User: maog
 * Date: 10/03/18
 * Time: 11:14
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;

class RestController extends FOSRestController
{
    /**
     * @Rest\Get("/REST/all", name="get_all")
     */
    public function getAllAction()
    {
        $restResult['ingredients'] = $this->getDoctrine()->getRepository('AppBundle:Ingredient')->findAll();

        if ($restResult === null) {
            return new View("No data", Response::HTTP_NOT_FOUND);
        }

        return $restResult;
    }
}