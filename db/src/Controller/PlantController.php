<?php

namespace App\Controller;

use FOS\RestBundle\Controller\ControllerTrait;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlantController extends FOSRestController
{
    use ControllerTrait;

    /**
     * @Route("/plants", name="plants")
     */
    public function getPlants()
    {
        $data = ['maïs', 'haricot vigneron'];
        $view = $this->view($data);
        return $this->handleView($view);
    }
}
