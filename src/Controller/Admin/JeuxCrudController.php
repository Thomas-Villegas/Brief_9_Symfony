<?php

namespace App\Controller\Admin;

use App\Entity\Jeux;
use App\Entity\Avis;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class JeuxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jeux::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('titre'),
            TextEditorField::new('description'),
            AssociationField::new('avis')
            ->setRequired(true)
            ->setFormTypeOptions([
                'choice_label' => 'avis_id', // Replace 'nom' with the name of the property you want to use as the label
                'query_builder' => function (AvisRepository $AvisRepository) {
                    return $AvisRepository->createQueryBuilder('a')
                        ->orderBy('a.nom', 'ASC');
                },
            ])
        ];
    }
 
}
