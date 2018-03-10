<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Ingredient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IngredientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nombre'
            ])
            ->add('quality', ChoiceType::class, [
                'choices' => [
                    'Muy mala' => 1,
                    'Mala' => 2,
                    'Normal' => 3,
                    'Buena' => 4,
                    'Muy buena' => 5
                ],
                'label' => 'Calidad'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ingredient::class
        ]);
    }
}
