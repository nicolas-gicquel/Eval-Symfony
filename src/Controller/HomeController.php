<?php

namespace App\Controller;

use App\Repository\ProductsRepository;
use App\Repository\CategoriesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(CategoriesRepository $categoriesRepository, ProductsRepository $productsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
            'products' => $productsRepository->findByNumber(6),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(CategoriesRepository $categoriesRepository, ProductsRepository $productsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
            'products' => $productsRepository->findByNumber(6),
        ]);
    }

    /**
     * @Route("/boutique", name="boutique")
     */
    public function boutique(CategoriesRepository $categoriesRepository, ProductsRepository $productsRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'categories' => $categoriesRepository->findAll(),
            'products' => $productsRepository->findByNumber(6),
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog(CategoriesRepository $categoriesRepository, ProductsRepository $productsRepository): Response
    {
        return $this->render('home/blog.html.twig', [
            'categories' => $categoriesRepository->findAll(),
            'products' => $productsRepository->findByNumber(6),
        ]);
    }
}
