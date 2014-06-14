<?php

namespace soleil\DonBundle\Form\Data;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DonType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('montant', 'choice', array(
                'choices'   => array(
                    '5'   => '5',
                    '10' => '10',
                    '20'   => '20',
                    '30'   => '30',
                    '40'   => '40',
                    'montantG'   => 'Montant libre',
                ),
                'multiple'  => false,
                'expanded' => true,
            ))
           
           //->add('montant', 'text')
        ;
        
        /*
        $w = new sfWidgetFormChoice(array(
            'choices' => array('Fabien Potencier', 'Fabian Lange'),
          ));
              }
         * */
        
        /*
        $builder->setWidget('choix', new sfWidgetFormChoice(array(
        'expanded' => true,
        'choices' => array('RDV', 'Relance', 'Renvoie catalogue'),
        ))
        );
         * 
         */
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_donbundle_Don';
    }
}
