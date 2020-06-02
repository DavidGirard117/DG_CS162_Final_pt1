<?php
    class Customers_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_customers($id = false){
            if($id != false){
                $filter = array('id' => $id);
            }
            else
                $filter = array();

            $query = $this->db->get_where('customers', $filter);
            return $query->result_array();
        }

    }