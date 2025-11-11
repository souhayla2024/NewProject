<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('seqclt')
            ->add('nomreseau')
            ->add('sousreseau')
            ->add('seqcltpackdb')
            ->add('refpackdb')
            ->add('nomclt')
            ->add('adresse')
            ->add('cp')
            ->add('ville')
            ->add('pays')
            ->add('tel1')
            ->add('tel2')
            ->add('tel3')
            ->add('fax')
            ->add('email')
            ->add('patron')
            ->add('contact')
            ->add('ccompta')
            ->add('commiss')
            ->add('commiss2')
            ->add('commiss3')
            ->add('commiss4')
            ->add('comttc')
            ->add('obs')
            ->add('libre')
            ->add('confirmation')
            ->add('frais')
            ->add('taxe')
            ->add('codecommercial')
            ->add('libtyperegle')
            ->add('paiement')
            ->add('datesaisie')
            ->add('compta')
            ->add('convoc')
            ->add('resa')
            ->add('typeregle')
            ->add('libtypeclt')
            ->add('ccredit')
            ->add('adresse2')
            ->add('principal')
            ->add('pointcom')
            ->add('refunique')
            ->add('groupeclient')
            ->add('litige')
            ->add('login')
            ->add('mdp')
            ->add('codeamadeus')
            ->add('annulationTechnique')
            ->add('delaiAt')
            ->add('carnetvoyage')
            ->add('archiver')
            ->add('loginGalileo')
            ->add('mdpGalileo')
            ->add('couleur')
            ->add('libclassification')
            ->add('categorie')
            ->add('comcoffret')
            ->add('loginAdpack')
            ->add('mdpAdpack')
            ->add('codeAgence')
            ->add('comAnnul')
            ->add('tvaInvisible')
            ->add('seqreseau')
            ->add('seqsousreseau')
            ->add('seqcommercial')
            ->add('seqtyperegle')
            ->add('seqtypeclt')
            ->add('seqcomm')
            ->add('loginbtob')
            ->add('mdpbtob')
            ->add('analytique')
            ->add('basculeAutoReglement')
            ->add('docLangue')
            ->add('abreviation')
            ->add('loginbtobvol')
            ->add('mdpbtobvol')
            ->add('paiementbtobvol')
            ->add('taxecli')
            ->add('seqconditionClient')
            ->add('codepayeur')
            ->add('blacklist')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
