<?php

namespace App\Form;

use App\Entity\Transactions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('toUserId')
            ->add('toUserItemId')
            ->add('fromUserItem')
            ->add('toUserItem')
            ->add('fromUserImage')
            ->add('toUserImage')
            ->add('jetonsProp')
            ->add('jetonsDem')
            ->add('commentaire')
            ->add('etat')
            ->add('fromUser')
            ->add('fromUserItem2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transactions::class,
        ]);
    }
}
