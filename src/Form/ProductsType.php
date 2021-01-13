<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameProduct')
            ->add('descriptionProduct')
            ->add('priceProduct')
            ->add('stockProduct')
            ->add('category', EntityType::class, [
                'class' => Categories::class,
                'choice_label' => 'nameCategory',
                ])
            // ->add('user', EntityType::class, [
            //     'class' => User::class,
            //     'choice_label' => 'nameCategory',
            //     ])
            // ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
