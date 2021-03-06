<?php

namespace Rec\MainBundle\Admin;

use Msi\AdminBundle\Admin\Admin;
use Msi\AdminBundle\Grid\Grid;
use Symfony\Component\Form\FormBuilder;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * @DI\Service("rec_main_artwork_category_admin", parent="msi_admin.admin")
 * @DI\Tag("msi.admin")
 */
class ArtworkCategoryAdmin extends Admin
{
    public function configure()
    {
        $this->class = 'Rec\MainBundle\Entity\ArtworkCategory';
        $this->addChild($this->container->get('rec_main_artwork_admin'));
    }

    public function buildGrid(Grid $builder)
    {
        $builder
            ->add('published', 'boolean')
            ->add('name')
            ->add('parent')
            ->add('image', 'image')
        ;
    }

    public function buildForm(FormBuilder $builder)
    {
        $builder
            ->add('published')
            ->add('name')
            ->add('imageFile', 'file')
            ->add('parent')
        ;
    }

    // public function configureAdminFindAllQuery(QueryBuilder $qb)
    // {
    //     $qb->addOrderBy('a.lft', 'ASC');
    // }
}
