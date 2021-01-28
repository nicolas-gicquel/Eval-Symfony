<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Products;
use App\Entity\Categories;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Création automatique de 20 produits
        for ($i = 0; $i < 20; $i++) {
            $product = new Products();
            $product->setNameProduct("Produit $i");
            $product->setDescriptionProduct("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus interdum ipsum, vel tincidunt neque efficitur vel. Donec sit amet dolor gravida est convallis bibendum. Ut at nisl nibh. Vivamus sodales turpis aliquet nisl vestibulum, nec suscipit augue euismod. Proin mattis massa at leo porta egestas tincidunt sed nulla. Donec pellentesque, turpis a tristique ultricies, dui risus mollis mauris, eu viverra ligula leo vitae dolor. Quisque eget semper sapien. Donec accumsan augue et felis porta eleifend. Nam blandit vehicula fringilla.");
            $product->setPriceProduct(99);
            $product->setStockProduct(5);
            $manager->persist($product);
        }

        //Création automatique de 3 catégories
        for ($i = 0; $i < 3; $i++) {
        $category = new Categories;
        $category->setNameCategory("Catégorie $i");
        $manager->persist($category);
        }

    


        $manager->flush();
    }
}
