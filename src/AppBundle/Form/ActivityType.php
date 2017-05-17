<?php

namespace AppBundle\Form;

use AppBundle\Entity\Activity;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder    
                ->add('name')
                ->add('status', EntityType::class, array(
                    'class' => 'AppBundle:Status',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('s')
                                ->orderBy('s.item', 'ASC');
                    },
                    'choice_label' => 'item',
                    'choice_value' => 'id',
                ))
                ->add('description', TextareaType::class)
                ->add('situation', ChoiceType::class, array(
                    'choices' => array(
                        'Ativo' => true,
                        'Inativo' => false
                    ),
                ))
                ->add('startDate', DateType::class, [
                    'widget' => 'single_text',
                    'html5' => false,
                ])
                ->add('endDate', DateType::class, [
                    'widget' => 'single_text',
                    'html5' => false,
                ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Activity::class,
        ));
    }
}
