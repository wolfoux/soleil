<?php

namespace soleil\AgendaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class EvenementAgendaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $domaine = $_SERVER['HTTP_HOST'];
        
        $builder
            ->add('nomFr', 'text')
            ->add('nomEn', 'text')
            
            ->add('descriptionFr', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('descriptionEn', 'textarea', array('attr' => array('class' => 'ckeditor')))
                
            ->add('dateDeb', 'datetime')
            ->add('dateFin', 'datetime')
                
            ->add('prix')
            ->add('nbMax', 'integer')
                
                 ->add('formation', 'entity', array(
                'class' => 'soleilFormationBundle:Formation',
                'property' => 'titreFr',
                'multiple' => false,
                'query_builder' => function(EntityRepository $er) use ($domaine){
                                        return $er->createQueryBuilder('f')
                                                    ->join('f.site', 's')
                                                    ->where('s.domaine = :dom')
                                                    ->setParameter('dom', $domaine)
                                                ;}
                ))
        ;
      
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\AgendaBundle\Entity\EvenementAgenda'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_agendabundle_evenementagenda';
    }
}
