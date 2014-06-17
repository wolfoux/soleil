<?php

namespace soleil\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;
//use Issep\PoleBundle\Entity\Polesthematiques;

class SiteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'entity', array(
                'class' => 'soleilSiteBundle:Site',
                'property' => 'titreFr',
                'label' => "Changer d'administration : ",
                'multiple' => false,
                'query_builder' => function(EntityRepository $er){
                                        return $er->createQueryBuilder('s')
                                                    ->where('s.domaine != :domaine')
                                                    ->setParameter('domaine', 'www.eft.com');}
                
                ))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\SiteBundle\Entity\Site'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_sitebundle_site';
    }
}
