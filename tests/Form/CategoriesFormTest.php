<?php
// tests/Form/CategoriesFormTest.php
namespace App\Tests\Form;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;



class CategoriesFormTest extends KernelTestCase{
    
    public function testNewCategory(){
        $category=(new Categories())
        ->setNameCategory('77');
        
        self::bootKernel();
        $error = self::$container->get('validator')->validate($category);
        $this->assertCount(0,$error);
    }
}