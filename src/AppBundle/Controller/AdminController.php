<?php

namespace AppBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class AdminController extends BaseAdminController {

    public function createEntityForm($entity, array $entityProperties, $view) {
        $form = parent::createEntityForm($entity, $entityProperties, $view);
        if ($this->entity['name'] === 'Product') {
            $form->remove('slug');
            $form->remove('image');
            $form->add('image', 'vlabs_file', array('required' => false));
            $form->remove('archivo');
            $form->add('archivo', 'vlabs_file', array('required' => false));
        }

        if ($this->entity['name'] === 'Category') {
            $form->remove('slug');
            $form->remove('cover');
            $form->remove('products');
            $form->add('cover', 'vlabs_file', array('required' => false));
        }

        return $form; 
    }

}

?>