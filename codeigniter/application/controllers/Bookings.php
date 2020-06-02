<?php
    class Bookings extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Bookings_model');
            $this->load->helper('url');
        }

        public function view($id = false, $page = 'Bookings'){
            $data['pageTitle'] = $page;
            $data['bookings'] = $this->Bookings_model->get_bookings($id);

            $this->load->view('templates/header');
            $this->load->view('ceil/bookings/bookings', $data);
            $this->load->view('templates/footer');
        }

        public function create(){

        }

        public function delete(){

        }
    }