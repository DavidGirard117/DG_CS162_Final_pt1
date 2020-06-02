<?php
    class Employees extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Employees_model');
            $this->load->helper('url');
        }

        public function view($id = false, $page = 'Employees'){
            $data['pageTitle'] = $page;
            $data['employees'] = $this->Employees_model->get_employees($id);

            $this->load->view('templates/header');
            $this->load->view('ceil/employees/employees', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

        }

        public function delete(){

        }
    }