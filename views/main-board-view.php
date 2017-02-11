<?php
/**
 * View of the Article main Board
 */
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    $this->Gui->col_width(1,2);
    
    $this->Gui->add_meta( array(
        'col_id'    =>  1,
        'namespace' =>  'article',
        'title'     =>  __( 'Article Modules Options', 'article' ),
        'type'      =>  'box',
        'gui_saver' => true,
        'footer'    =>  [
            'submit' => [
                'label' => __('Save','article')
            ]
            ]
    ) );
    
    $this->Gui->add_item(
            array(
               'type' => 'select',
               'label' => __('Max Item per page','article'),
               'name' => 'article_max_item_page',
               'options' => array('10' => 10,'20' => 20,'30' => 30)
            ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'text',
        'label' => __('Default Articles name','article'),
        'name'  => 'article_article_def_name',
        'placeholder' => 'Default Articles name'
    ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'textarea',
        'label' => __('Default Articles Description','article'),
        'name' => 'article_article_def_desc',
        'placeholder' => 'Default Article Description'
    ),'article',1);

    $this->Gui->add_item(array(
        'type' => 'checkbox',
        'value' => 'no',
        'name' => 'article_auto_update',
        'label' => __('Article auto update','article'),
        'description' => 'Should the article Be auto Updated'
    ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'multiple',
        'label' => __('Test for a multiple selection','article'),
        'name' =>  'article_mutltiple_selection',
        'options' => array('1' => 1, '22' => 2, '333' => 3)
    ),'article',1);
    $this->Gui->output();
    
    
    
    
    
