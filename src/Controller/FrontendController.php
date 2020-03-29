<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller to render a basic "homepage"
 *
 * Class FrontendController
 * @package App\Controller
 */
class FrontendController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('frontend/homepage.html.twig');
    }
}
