<?php

namespace App\Form;

use App\Entity\Accessory;
use App\Entity\Boot;
use App\Entity\Chest;
use App\Entity\March;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Commander;
use App\Entity\Glove;
use App\Entity\Helm;
use App\Entity\Leg;
use App\Entity\Weapon;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MarchFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id_commander_1', EntityType::class, [
                'class' => Commander::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Primary commander'
            ])
            ->add('id_commander_2', EntityType::class, [
                'class' => Commander::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Secondary commander'
            ])
            ->add('helm', EntityType::class, [
                'class' => Helm::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Helm'
            ])
            ->add('iconic_helm', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic helm?'
            ])
            ->add('crit_helm', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit helm?'
            ])
            ->add('chest', EntityType::class, [
                'class' => Chest::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Chest'
            ])
            ->add('iconic_chest', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic chest?'
            ])
            ->add('crit_chest', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit chest?'
            ])
            ->add('weapon', EntityType::class, [
                'class' => Weapon::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Weapon'
            ])
            ->add('iconic_weapon', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic weapon?'
            ])
            ->add('crit_weapon', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit weapon?'
            ])
            ->add('glove', EntityType::class, [
                'class' => Glove::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Glove'
            ])
            ->add('iconic_glove', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic glove?'
            ])
            ->add('crit_glove', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit glove?'
            ])
            ->add('leg', EntityType::class, [
                'class' => Leg::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Leg'
            ])
            ->add('iconic_leg', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic leg?'
            ])
            ->add('crit_leg', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit leg?'
            ])
            ->add('boot', EntityType::class, [
                'class' => Boot::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Boot'
            ])
            ->add('iconic_boot', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic boot?'
            ])
            ->add('crit_boot', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit boot?'
            ])
            ->add('accessory_1', EntityType::class, [
                'class' => Accessory::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'First accessory'
            ])
            ->add('iconic_accessory_1', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic first accessory?'
            ])
            ->add('crit_accessory_1', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit first accessory?'
            ])
            ->add('accessory_2', EntityType::class, [
                'class' => Accessory::class,
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Second accessory'
            ])
            ->add('iconic_accessory_2', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Iconic second accessory?'
            ])
            ->add('crit_accessory_2', ChoiceType::class, [
                'choices' => [
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Crit second accessory?'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => March::class,
        ]);
    }
}
