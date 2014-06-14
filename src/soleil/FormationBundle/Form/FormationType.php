<?php

namespace soleil\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFr','text', array('label' => 'Titre Fr : '))
            ->add('titreEn','text')
                
            ->add('textFr', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('textEn', 'textarea', array('attr' => array('class' => 'ckeditor')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\FormationBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_formationbundle_formation';
    }
}
