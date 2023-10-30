<?php

namespace App\Form;

use App\Entity\Measurement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MeasurementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date',DateType::class,[
                'widget'=>'single_text',
                'attr'=>['placeholder'=>'Select date']
            ])
            ->add('celsius',NumberType::class,[
            'attr'=>[
                'min'=>-40,
                'max'=>60,]])
            ->add('location',EntityType::class,[
                'class'=>'App\Entity\Location',
                'choice_label'=>'city',
                'placeholder'=>'Select location',
                'attr'=>['placeholder'=>'Select location']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Measurement::class,
        ]);
    }
}
