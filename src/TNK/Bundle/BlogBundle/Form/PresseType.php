<?php

namespace TNK\Bundle\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PresseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', null, array('label' => 'Titre'))
            ->add('sousTitre', null, array('label' => 'Sous titre'))
            ->add('dateModification', 'date', array(
                    'widget'    => 'single_text',
                    'label' => 'Date de publication',
                    'attr' => array('class' => 'datePicker'),
                    'format' => 'dd/MM/yyyy',
                    'input'  => 'datetime',
                    'required'  => true))
            ->add('fileVignette', 'file', array('required' => false, 'label' => 'Vignette (taille = 220px/100px'))
            ->add('fileImage', 'file', array('required' => false, 'label' => 'Image'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TNK\Bundle\BlogBundle\Entity\Presse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tnk_bundle_blogbundle_presse';
    }
}
