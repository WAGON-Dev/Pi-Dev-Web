<?php

namespace GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VoyagepersonaliseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('villeDepart')
            ->add('villeArrive')
            ->add('dateDepart')
            ->add('dateArrive')
            ->add('nbrParticipant')
            ->add('hotelFk',EntityType::class,array('class'=>'GoVoyageBundle:Users','choice_label'=>'idUser','multiple'=>false))
            ->add('clientVpFk',EntityType::class,array('class'=>'GoVoyageBundle:Users','choice_label'=>'idUser','multiple'=>false))
            ->add('event1Fk',EntityType::class,array('class'=>'GoVoyageBundle:Evenement','choice_label'=>'idEvenement','multiple'=>false))
            ->add('idGuideFk',EntityType::class,array('class'=>'GoVoyageBundle:Users','choice_label'=>'idUser','multiple'=>false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageBundle\Entity\Voyagepersonalise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'govoyagebundle_voyagepersonalise';
    }


}
