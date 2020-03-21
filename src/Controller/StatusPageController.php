<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class StatusPageController extends AbstractController
{
    /**
     * @Route("/status/{number}", name="status_page")
     */
    public function index(string $number)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'number' => $number,
        ]);
    }
}
