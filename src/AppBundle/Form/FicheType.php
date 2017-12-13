<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Projet;

class FicheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('project', EntityType::class, array(
                            'label' => 'Veuillez choisir un projet',
                            'class' => Projet::class,
                            'query_builder' => function (EntityRepository $er) {
                              return $er->createQueryBuilder('p')
                              ->where('p.dateEnd >= :date')
                              ->setParameter('date', new \DateTime());
                              },
                            ))
            ->add('manager')
            ->add('ficheDate')
            ->add('nbDayDone')
            ->add('nbDaySold')
            ->add('progression')
            ->add('comment');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche';
    }


}
