<?php
    class Customers extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Customers_model');
            $this->load->helper('url');
        }

        public function view($id = false, $page = 'Customers'){
            $data['pageTitle'] = $page;
            $data['customers'] = $this->Customers_model->get_customers($id);

            $this->load->view('templates/header');
            $this->load->view('ceil/customers/customers', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

        }

        public function delete(){

        }
    }