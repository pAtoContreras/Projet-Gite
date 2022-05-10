<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\ContactController;
use Symfony\Component\Form\FormError;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    
    {
        /* le builder va construire le formlaire*/
        $builder
            ->add('departement', TextType::class, array(
                'required' => false,
                'attr' => array('class' => 'Département',
                )),
                
            )
            ->add('ville', TextType::class, array(
                'required' => false,
                'attr' => array('class' => 'Ville'))
                

            )
            ->add('distance', RangeType::class, array(
                'required' => false,
                'attr' => array('min' => 0,
                                'max' => 50))
            )
            ->add('date', DateType::class)
            

            ->add('laveVaisselle', CheckboxType::class, [
                'label' => 'lave-vaisselle',
                'required' => false,
                ]
            )

            ->add('laveLinge', CheckboxType::class, [
                'label' => 'lave-linge',
                'required' => false,
                ]
            )
            ->add('climatisation', CheckboxType::class, [
                'label' => 'climatisation',
                'required' => false,
                ]
            )
            ->add('television', CheckboxType::class, [
                'label' => 'télévision',
                'required' => false,
                ]
            )
            ->add('terrasse', CheckboxType::class, [
                'label' => 'terrasse',
                'required' => false,
                ]
            )
            ->add('barbecue', CheckboxType::class, [
                'label' => 'barbecue',
                'required' => false,
                ]
            )
            ->add('piscinePrivee', CheckboxType::class, [
                'label' => 'piscine privee',
                'required' => false,
                ]
            )
            ->add('piscinePartagee', CheckboxType::class, [
                'label' => 'piscine partagee',
                'required' => false,
                ]
            )
            ->add('tennis', CheckboxType::class, [
                'label' => 'tennis',
                'required' => false,
                ]
            )
            ->add('pingPong', CheckboxType::class, [
                'label' => 'ping-pong',
                'required' => false,
                ]
            )
            ->add('locationLinge', CheckboxType::class, [
                'label' => 'location de linge',
                'required' => false,
                ]
            )
            ->add('menage', CheckboxType::class, [
                'label' => 'ménage en fin de séjour',
                'required' => false,
                ]
            )
            ->add('accesInternet', CheckboxType::class, [
                'label' => 'accès internet',
                'required' => false,
                ]
            ) 
            ;
            $entity = $builder->getData();
            
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                'Standard Shipping' => 'standard',
                'Expedited Shipping' => 'expedited',
                'Priority Shipping' => 'priority',
            ],
        ]);
    }

    public function getDepartement()
    {
        return 'departement';
    }

    public function getVille()
    {
        return 'ville';
    }

    public function getDistance()
    {
        return 'distance';
    }

    public function getDate()
    {
        return 'date';
    }

    public function getEquipementsExt()
    {
        $tabEquipementsExt = array('laveVaisselle', 'laveLinge' , 'climatisation', 'television'); 
    }

    public function getEquipementsInt()
    {
        
    }

    
}
