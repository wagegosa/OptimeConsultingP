<?php

namespace App\Form;
use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, array('label'=>'Código', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
            ->add('name', TextType::class, array('label'=>'Nombre', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
            ->add('decryption',TextareaType::class, array('label'=>'Descripción', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
            ->add('brand', TextType::class, array('label'=>'Marca', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
            ->add('Category', ChoiceType::class, ['choices'=>['Select...'=>'0', 'Yes'=>'1', 'No'=>'2']], array('label'=>'Categoría', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
            ->add('price', MoneyType::class, array('label'=>'Precio', 'required'=>'required', 'attr'=>array('class'=>'form-control')))
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
