<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city',TextType::class,['attr'=>['placeholder'=>'Enter city name']])
            ->add('country',ChoiceType::class,[
                'choices'=>[
                    'Poland'=>'PL',
                    'France'=>'FR',
                    'Germany'=>'DE',
                    'Italy'=>'IT',
                    'Spain'=>'ES',
                    'United Kingdom'=>'GB',
                    'United States'=>'US',
                ],
                'attr'=>['placeholder'=>'Select country']
            ])
            ->add('longitude',NumberType::class,[
                'scale'=>7,
            ])
            ->add('latitude',NumberType::class,[
                'scale'=>7,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
