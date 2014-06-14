<?php

namespace soleil\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConfigurationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facebook','text',array(
                'label' => 'FaceBook : '
            ))
            ->add('twitter','text',array(
                'label' => 'Twitter : '
            ))
            ->add('likedln','text',array(
                'label' => 'Likedln : '
            ))
        ;
        //->add('nom','text',array('label' => 'Votre nom * ')) 
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\SiteBundle\Entity\Configuration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_sitebundle_configuration';
    }
}
