<?php

namespace soleil\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
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

            ->add('textFr', 'textarea', array('attr' => array('class' => 'ckeditor')))
            ->add('textEn', 'textarea', array('attr' => array('class' => 'ckeditor')))
                
            //->add('image', new ImageArticleType(), array('required' => false))
            ->add('video', 'text', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'soleil\ArticleBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'soleil_articlebundle_article';
    }
}
