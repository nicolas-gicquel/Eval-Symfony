<?php
// tests/Form/ProductsFormTest.php
namespace App\Tests\Form;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;



class ProductsFormTest extends KernelTestCase{
    
    public function testNewProducts(){
        $products=(new Products())
        ->setNameProduct(' ')
        ->setDescriptionProduct(' ')
        ->setPriceProduct(' ')
        ->setStockProduct(' ');
        
        self::bootKernel();
        $error = self::$container->get('validator')->validate($products);
        $this->assertCount(0,$error);
    }
}