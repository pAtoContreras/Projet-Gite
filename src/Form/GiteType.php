<?php

namespace App\Form;

use App\Entity\Gite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('region')
            ->add('departement')
            ->add('ville')
            ->add('codePostal')
            ->add('surface')
            ->add('nbChambres')
            ->add('nbCouchage')
            ->add('tarifJourBS')
            ->add('tarifJourHS')
            ->add('prixAnimaux')
            ->add('adresse')
            ->add('arrayImages')
            ->add('idProprietaire')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gite::class,
        ]);
    }
}
