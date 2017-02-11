<?php
/**
 * Main Controller for Article Module
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class ArticleController extends Tendoo_Module{
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Load the main Article Module Board
     */
    public function mainboard(){
        $this->Gui->set_title('Article Module');
        $this->load->module_view('article','main-board-view');
    }
    /**
     * Load the populating article table view
     */
    public function add_article(){
        $this->enqueue->js_namespace('dashboard_footer');
        $this->enqueue->js('js/main',module_url('article'));
        $this->Gui->set_title('Add article');
        $this->load->module_view('article','add_view');
    }
    
    public function add(){
        $name = $this->input->post('name');
        $desc = $this->input->post('description');
        $price = $this->input->post('price');
        if(is_nan($price)){
            $this->Gui->set_title('Add article');
            $message = "Expected number for price";
            $this->load->module_view('article','add_view',$message);
        } else {
            $q = "INSERT INTO article_article(name,decription,price) VALUES (?,?,?)";
            if($this->db->query($q,array($name,$desc,$price))){
                $this->Gui->set_title('Add article');
                $message = "Insertion done";
                $this->load->module_view('article','add_view',$message);
            }
        }
    }
}