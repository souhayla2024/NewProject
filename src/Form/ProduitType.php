<?php

namespace App\Form;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ProduitType extends AbstractType
{
    public function __construct(
        private ProduitRepository $produitRepository
    ) {}

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $commonTextAttr = [
            'attr' => [
                'class' => 'form-control mode',
            ],
            'required' => false,
            'empty_data' => '' // Transforme null en chaîne vide
        ];

        // Configuration pour les champs choix avec valeur par défaut
        $commonChoiceAttr = [
            'attr' => [
                'class' => 'form-control mode',
            ],
            'required' => false,
            'empty_data' => 0 // Valeur par défaut pour les choix
        ];

        // Configuration pour les textarea
        $commonTextareaAttr = [
            'attr' => [
                'class' => 'form-control mode',
                'rows' => 3
            ],
            'required' => false,
            'empty_data' => ''
        ];

        $builder
            ->add('codeprod', TextType::class, [
                'attr' => [
                    'class' => 'form-control mode',
                    'readonly' => 'readonly'
                ],
                'required' => false,
                'empty_data' => '',
                'label' => 'Code produit (généré automatiquement)',
                'help' => 'Ce code sera généré automatiquement à l\'enregistrement'
            ])
            ->add('libprod', TextType::class, $commonTextAttr)
            ->add('libprod2', TextType::class, $commonTextAttr)
            ->add('libtypeprod', TextType::class, $commonTextAttr)
            
            // CHAMPS DE LA LISTE
            // ->add('typeproduit', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 1
            // ]))
            // ->add('libpays', TextType::class, $commonTextAttr)
            // ->add('tel2', TextType::class, $commonTextAttr)
            // ->add('faxresa', TextType::class, $commonTextAttr)
            // ->add('libmonnaie', TextType::class, $commonTextAttr)
            // ->add('vendable', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('sansprix', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('chambre1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre7', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('transfert', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('location', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('contrat', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('cee', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('ageenfant3', TextType::class, $commonTextAttr)
            // ->add('confirmation', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('libtypechambre1', TextType::class, $commonTextAttr)
            // ->add('libtypechambre2', TextType::class, $commonTextAttr)
            // ->add('libtypechambre3', TextType::class, $commonTextAttr)
            // ->add('libtypechambre4', TextType::class, $commonTextAttr)
            // ->add('libtypechambre5', TextType::class, $commonTextAttr)
            // ->add('libtypechambre6', TextType::class, $commonTextAttr)
            // ->add('libtypechambre7', TextType::class, $commonTextAttr)
            // ->add('capacite6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite7', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('enfantgratuit', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('separer', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('attente', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('envoi', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('archiver', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('aero3', TextType::class, $commonTextAttr)
            // ->add('freesale', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('tpladulte', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('delairetro', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfde1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfde2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfde3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfde4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('reducenf1', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('reducenf2', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('reducenf3', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('reducenf4', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('login', TextType::class, $commonTextAttr)
            // ->add('implangue', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Français' => 1,
            //         'Anglais' => 2
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('mdp', TextType::class, $commonTextAttr)
            // ->add('codepays', TextType::class, $commonTextAttr)
            // ->add('engagement', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 1
            // ]))
            // ->add('ageenfant4', TextType::class, $commonTextAttr)
            // ->add('bebe', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('seqcuriste', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('seqtypeprod', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('seqgroupe', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('seqprest', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('seqreceptif', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('doclangue', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Français' => 1,
            //         'Anglais' => 2
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('etablissement', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre8', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('enfantInterdit', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('bebeInterdit', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('obs1', TextareaType::class, $commonTextareaAttr)
            // ->add('obsroom', TextType::class, $commonTextAttr)
            // ->add('descriptif', TextType::class, $commonTextAttr)
            // ->add('achatfixe', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('promo', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('stay', TextType::class, $commonTextAttr)
            // ->add('cureincluse', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('codeterrestre', TextType::class, $commonTextAttr)
            // ->add('okRefnet', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('okRefnet2', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('exclureCalculAutomatique', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('statut', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Actif' => 1,
            //         'Inactif' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('oVoyages', ChoiceType::class, array_merge($commonChoiceAttr, [
            //     'choices' => [
            //         'Oui' => 1,
            //         'Non' => 0
            //     ],
            //     'empty_data' => 0
            // ]))
            // ->add('capacite1', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite2', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite3', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite4', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('capacite8', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre9', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre10', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre11', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('chambre12', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('libtypechambre8', TextType::class, $commonTextAttr)
            // ->add('ageenfant5', TextType::class, $commonTextAttr)
            // ->add('ageenfant6', TextType::class, $commonTextAttr)
            // ->add('ageenfant5de', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('ageenfant6de', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('ageenfant5a', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('ageenfant6a', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('ageenfanta5', TextType::class, $commonTextAttr)
            // ->add('ageenfanta6', TextType::class, $commonTextAttr)
            // ->add('nbenfde5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfde6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbenfa6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('nbadultepayant6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf5', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('catenf6', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('reducenf5', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('reducenf6', NumberType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => '0',
            //     'scale' => 2
            // ]))
            // ->add('age9', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('age10', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('age11', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('age12', IntegerType::class, array_merge($commonChoiceAttr, [
            //     'empty_data' => 0
            // ]))
            // ->add('no', TextType::class, $commonTextAttr)

            // AUTRES CHAMPS EXISTANTS
            ->add('libgroupe', TextType::class, $commonTextAttr)
            ->add('adresse', TextType::class, $commonTextAttr)
            ->add('cp', TextType::class, $commonTextAttr)
            ->add('libville', TextType::class, $commonTextAttr)
            ->add('patron', TextType::class, $commonTextAttr)
            ->add('email', TextType::class, $commonTextAttr)
            ->add('email2', TextType::class, $commonTextAttr)
            ->add('tel1', TextType::class, $commonTextAttr)
            ->add('faxhotel', TextType::class, $commonTextAttr)
            ->add('libprest', TextType::class, $commonTextAttr)
            ->add('nomreceptif', TextType::class, $commonTextAttr)
            ->add('seqfour', TextType::class, $commonTextAttr)
            ->add('nomfour', TextType::class, $commonTextAttr)
            ->add('obs', TextareaType::class, $commonTextareaAttr)
            // ->add('ageenfant1', TextType::class, $commonTextAttr)
            // ->add('ageenfant2', TextType::class, $commonTextAttr)
            ->add('ccompta', TextType::class, $commonTextAttr)
            ->add('ageenfant1de', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant2de', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant1a', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant2a', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('marge', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('aero1', TextType::class, $commonTextAttr)
            ->add('aero2', TextType::class, $commonTextAttr)
            ->add('statutVente', ChoiceType::class, array_merge($commonChoiceAttr, [
                'choices' => [
                    'RQ' => 1,
                    'FS' => 2,
                    'AL' => 3
                ],
                'empty_data' => 0
            ]))
            ->add('codecuriste', TextType::class, $commonTextAttr)
            ->add('nomcuriste', TextType::class, $commonTextAttr)
            ->add('categ', ChoiceType::class, array_merge($commonTextAttr, [
                'choices' => [
                    '' => '',
                    '*' => '*',
                    '**' => '**',
                    '***' => '***',
                    '****' => '****',
                    '**** SUP' => '**** SUP',
                    '*****' => '*****',
                    '***SUP' => '***SUP',
                    '**SUP' => '**SUP',
                    'CHARME' => 'CHARME',
                    'RYAD' => 'RYAD'
                ],
                'empty_data' => ''
            ]))
            ->add('age1', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age2', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age3', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age4', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age5', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age6', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age7', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('age8', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('seqsouspays', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfanta1', TextType::class, $commonTextAttr)
            ->add('ageenfanta2', TextType::class, $commonTextAttr)
            ->add('bebea', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('seqregletarifaire', ChoiceType::class, array_merge($commonChoiceAttr, [
                'choices' => [
                    'REGLE 1' => 1
                ],
                'empty_data' => 0
            ]))
            ->add('sansbebe', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control mode',
                ],
                'choices' => [
                    'Oui' => 0,
                    'Non' => 1
                ],
                'expanded' => true, 
                'placeholder' => false,    
                'multiple' => false,    
                'required' => false,
                'empty_data' => 0,
                'label' => false      
            ])
            ->add('idpays', ChoiceType::class, array_merge($commonChoiceAttr, [
                'choices' => [
                    'ARGENTINE' => 9,
                    'BELGIQUE' => 16,
                    'BRESIL' => 24,
                    'BAHAMAS' => 25,
                    'BIELORUSSIE' => 29,
                    'BELIZE' => 30,
                    'ILES COCOS' => 32,
                    'CENTRE-AFRIQUE' => 33,
                    'CONGO' => 34,
                    'SUISSE' => 35,
                    'COTE D\'IVOIRE' => 36,
                    'ILES COOK' => 37,
                    'CHILI' => 38,
                    'CAMEROUN' => 39,
                    'CHINE' => 40,
                    'COLOMBIE' => 41,
                    'CUBA' => 43,
                    'CHYPRE' => 46,
                    'ALLEMAGNE' => 47,
                    'DANEMARK' => 49,
                    'ALGERIE' => 51,
                    'EGYPTE' => 54,
                    'ERYTHREE' => 56,
                    'ESPAGNE' => 57,
                    'ETHIOPIE' => 58,
                    'FINLANDE' => 59,
                    'FALKLAND' => 61,
                    'MICRONESIE' => 62,
                    'FEROE' => 63,
                    'GRENADE' => 66,
                    'GEORGIE' => 67,
                    'GHANA' => 69,
                    'GIBRALTAR' => 70,
                    'GROENLAND' => 71,
                    'GAMBIE' => 72,
                    'GUADELOUPE' => 74,
                    'GRECE' => 75,
                    'GUAM' => 77,
                    'CROATIE' => 82,
                    'HAITI' => 83,
                    'INDONESIE' => 85,
                    'IRLANDE' => 86,
                    'ISRAEL' => 87,
                    'ISLANDE' => 91,
                    'ITALIE' => 92,
                    'JORDANIE' => 94,
                    'JAPON' => 95,
                    'KENYA' => 96,
                    'KIRIBATI' => 99,
                    'MAROC' => 118,
                    'MONACO' => 119,
                    'MARTINIQUE' => 125,
                    'MAURITANIE' => 126,
                    'MALTE' => 128,
                    'ILE MAURICE' => 129,
                    'MALDIVES' => 130,
                    'MEXIQUE' => 132,
                    'NOUVELLE CALEDONIE' => 136,
                    'POLYNESIE' => 150,
                    'PORTUGAL' => 158,
                    'REUNION' => 162,
                    'SEYCHELLES' => 168,
                    'REPUBLIQUE SLOVAQUE' => 175,
                    'SENEGAL' => 178,
                    'TUNISIE' => 192,
                    'TURQUIE' => 195,
                    'ETATS-UNIS' => 201,
                    'THAILANDE' => 206,
                    'AFRIQUE DU SUD' => 213,
                    'REPUBLIQUE TCHEQUE' => 220,
                    'ROYAUME UNIS' => 249,
                    'FRANCE' => 250
                ],
                'attr' => [
                    'class' => 'form-control mode',
                    'style' => 'font-weight: bold;'
                ],
                'empty_data' => 0
            ]))
            ->add('stockglobal', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control mode',
                ],
                'choices' => [
                    'Oui' => 0,
                    'Non' => 1
                ],
                'expanded' => true, 
                'placeholder' => false,    
                'multiple' => false,    
                'required' => false,
                'empty_data' => 0,
                'label' => false      
            ])
            ->add('typeachat', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control mode',
                ],
                'choices' => [
                    'Oui' => 0,
                    'Non' => 1
                ],
                'expanded' => true, 
                'placeholder' => false,    
                'multiple' => false,    
                'required' => false,
                'empty_data' => 0,
                'label' => false      
            ])

            ->add('ageenfant3de', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant3a', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant4de', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfant4a', IntegerType::class, array_merge($commonChoiceAttr, [
                'empty_data' => 0
            ]))
            ->add('ageenfanta3', TextType::class, $commonTextAttr)
            ->add('ageenfanta4', TextType::class, $commonTextAttr)
        ;
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $produit = $event->getData();
            $form = $event->getForm();

            if (!$produit || !$produit->getCodeprod()) {
                $nextCode = $this->generateNextCode();
                
                $form->add('codeprod', TextType::class, [
                    'attr' => [
                        'class' => 'form-control mode',
                        'readonly' => 'readonly'
                    ],
                    'required' => false,
                    'empty_data' => $nextCode,
                    'data' => $nextCode,
                    'label' => 'Code produit (généré automatiquement)',
                    'help' => 'Ce code sera généré automatiquement à l\'enregistrement: ' . $nextCode
                ]);
            }
        });

        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            $produit = $event->getData();
            $form = $event->getForm();

            if (!$produit->getCodeprod()) {
                $nextCode = $this->generateNextCode();
                $produit->setCodeprod($nextCode);
            }
        });
    }

    private function generateNextCode(): string
    {
        // CORRECTION : Utiliser $this->produitRepository (minuscule)
        $lastCode = $this->produitRepository->findLastProductCode();
        
        if (!$lastCode) {
            return 'H001';
        }

        preg_match('/([A-Za-z]*)(\d+)/', $lastCode, $matches);
        
        if (count($matches) === 3) {
            $prefix = $matches[1]; 
            $number = (int)$matches[2]; 
            $nextNumber = $number + 1;

            $formattedNumber = str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
            
            return $prefix . $formattedNumber; 
        }

        return 'H001';
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
            'validation_groups' => false,
            'allow_extra_fields' => true,
        ]);
    }
}