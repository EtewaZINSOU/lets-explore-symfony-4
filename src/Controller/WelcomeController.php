<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    /**
     * @Route(
     *     "/hello",
     *     name="hello_page"
     * )
     * @param Request $request
     * @return Response
     */
    public function hello(Request $request)
    {
        return $this->render('hello_page.html.twig',[
            'some_variable' => 'HelloPageController',
        ]);
    }
}
