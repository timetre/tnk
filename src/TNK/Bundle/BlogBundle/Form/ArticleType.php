<?php

namespace TNK\Bundle\BlogBundle\Form;

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
            ->add('titre', null, array('label' => 'Titre'))
            ->add('resume', 'textarea', array(
                'label' => 'Résumé',
                'required'  => false,
                'attr' => array(
                        'class' => 'ckeditor'
                )
            ))
            ->add('contenu', 'textarea', array(
                'label' => 'Contenu',
                'required'  => false,
                'attr' => array(
                        'class' => 'ckeditor'
                )
            ))
            ->add('datePublication', 'date', array(
                    'widget'    => 'single_text',
                    'label' => 'Date de publication',
                    'attr' => array('class' => 'datePicker'),
                    'format' => 'dd/MM/yyyy',
                    'input'  => 'datetime',
                    'required'  => true))
            ->add('actif', null, array('label' => 'Actif'))
            ->add('slug', null, array('label' => 'Slug'))
            ->add('categorie', null, array('label' => 'Catégorie'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TNK\Bundle\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tnk_bundle_blogbundle_article';
    }
}
