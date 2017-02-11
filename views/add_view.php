<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    $this->Gui->col_width(1,2);

    $this->Gui->add_meta( array(
        'col_id'    =>  1,
        'namespace' =>  'article',
        'title'     =>  __( 'Add Article', 'article' ),
        'type'      =>  'box',
    ) );
    
    /*$this->Gui->add_item(array(
        'type' => 'text',
        'label' => __('Name','article'),
        'name'  => 'name',
        'placeholder' => 'Eg: Tendoo CMS'
    ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'textarea',
        'label' => __('Description','article'),
        'placeholder' => __('Eg: The most powerful CMS for eCommerce designing','article'),
        'name' => 'description',
    ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'text',
        'label' => 'Price',
        'placeholder' => __('Article price','article'),
        'name' => 'price'
    ),'article',1);
    
    $this->Gui->add_item(array(
        'type' => 'buttons',
        'buttons_types' => 'submit',
        'name' => 'add_article_btn',
        'value' => __('Add','article'),
    ),'article',1);*/
    
    $this->Gui->add_item(
        array(
            'type' => 'dom',
            'content' => $this->load->module_view('article','add_form',null,true) 
        ), 'article' ,1 );
    
    $this->Gui->output();
