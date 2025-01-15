<?php

namespace App\Form;

use App\Entity\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('ht_price')
            ->add('vat_rate')
            ->add('stock')
            ->add('orders', EntityType::class, [
                'class' => Order::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('carts', EntityType::class, [
                'class' => Cart::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}