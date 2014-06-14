<?php

namespace soleil\ecommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RealisationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFr', 'text')
            ->add('titreEn', 'text')
            
            ->add('realiserpar', 'text', array(
                'label' => 'Réalisé par',
            ))
            ->add('prix')
            ->add('dimension', 'text')
                
            ->add('image', new ImageRealisationType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\ecommerceBundle\Entity\Realisation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_ecommercebundle_realisation';
    }
}
