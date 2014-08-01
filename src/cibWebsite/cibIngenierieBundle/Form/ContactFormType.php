<?php

namespace cibWebsite\cibIngenierieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('societie')
            ->add('fonction')
            ->add('telephone')
            ->add('email', 'email')
            ->add('message', 'textarea')
            ->add('Envoyer', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'cibWebsite\cibIngenierieBundle\Entity\ContactForm'
            ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cibwebsite_cibingenieriebundle_contactForm';
    }
}
