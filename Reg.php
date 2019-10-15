<?php 
    defined('BASEPATH') OR exit('No direct script access alloed');

    class Reg extends CI_Controller{
        public function __contruction(){
            parent:: __construct();
             //Load database
             $config['hostname']='localhost';
             $config['username']='usr';
             $config['password']='abc@123';
             $config['database']='CertiStore';
             $config['dbdriver']='mysqli';
             $config['dbprefix']='';
             $config['pconnect']='FALSE';
             $config['db_debug']='TRUE';
             $config['cache_on']='FALSE';
             $config['cachedir']='';
             $config['char_set']='utf8';
             $config['dbcollat']='utf_general_ci';
 
             $this->load->database($config);
 
             //Load Model
             $this->load->model('Dbase');
             $this->load->model('Passwd');
 
         }

        }
    }
?>