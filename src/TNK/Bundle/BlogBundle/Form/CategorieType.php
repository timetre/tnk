<?php

namespace TNK\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, array('label' => 'Titre'))
            ->add('description', 'textarea', array(
                'label' => 'Contenu',
                'required'  => false,
                'attr' => array(
                        'class' => 'ckeditor'
                )
            ))
            ->add('ordre', null, array('label' => 'Ordre'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TNK\Bundle\BlogBundle\Entity\Categorie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tnk_bundle_blogbundle_categorie';
    }
}
