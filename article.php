<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ArticleModule extends Tendoo_Module{
    /**
     * Class Article Designed for Creating, Reading, Updating and Deleting Article
     */
    
    public function __construct() {
        parent::__construct();
        $this->events->add_action('load_dashboard', [ $this, 'dashboard' ] );
        $this->events->add_filter('admin_menus', [ $this, 'menus' ], 12 );
        $this->events->add_filter('do_enable_module',[$this, 'install'],20);
    }
    
    /**
     * Loading module dashboard
     */
    public function dashboard(){
        include_once( dirname( __FILE__ ) . '/inc/controller.php' );
        $this->Gui->register_page_object( 'article', new ArticleController );
    }
    
    /**
     * Setting module Menu
     */
    
    public function menus( $menus )
    {
        if( User::can( 'manage_core' ) ) {
            if( @$menus[ 'settings' ] != null ) {
                $menus  =   array_insert_before( 'modules', $menus, 'article', [
                    [
                        'title' =>  'Article Module',
                        'href'   =>  site_url( array( 'dashboard', 'article', 'mainboard' ) ),
                        'icon'  =>  'fa fa-cart-arrow-down'
                    ],
                    [
                        'title' =>  'Add article',
                        'href'   =>  site_url( array( 'dashboard', 'article', 'add_article' ) ),
                        'icon'  =>  'fa fa-plus'
                    ],
                    [
                        'title' => 'List Article',
                        'href'  => site_url( array( 'dashboard', 'article', 'list_article' ) ),
                        'icon'  => 'fa fa-eye'
                    ]
                ]);
            }            
        }
        return $menus;
    }
    
    /**
     * Enable module filter (Setting Database)
     */
    
    public function install(){
        // Checking if the article tables is in the DB 
        if(@$Options['article_db_install']){
            // Installing the article table
            $q = "create table article_article 
                (
                   id                   int                            not null auto_increment,
                   name                 varchar(255)                   null,
                   description          text                           null,
                   price                int                            null,
                   constraint pk_article_article primary key clustered (id)
                )";
            
            if($this->db->query($q)){
                // Set the options article_db_install to yes
                $this->db->insert('options', array(
                    'key'    =>    'article_db_install',
                    'value'    =>    'yes',
                    'autoload'    =>    1,
                    'user'        =>    0,
                    'app'        =>    'article_module',
                ));
            }
        }
    }
}
new ArticleModule;