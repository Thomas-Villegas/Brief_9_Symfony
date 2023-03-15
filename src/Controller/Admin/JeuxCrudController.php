<?php

namespace App\Controller\Admin;

use App\Entity\Jeux;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class JeuxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jeux::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('titre'),
            TextField::new('description'),
            DateField::new('date'),
            ImageField::new('image')->setBasePath('images/')->setUploadDir('public/images'),
            TextField::new('url'),
        ];
    }



    




}
