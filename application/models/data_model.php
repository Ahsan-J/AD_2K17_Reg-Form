<?php
    class Data_model extends CI_Model{
        public function verify($Username,$Password){
            $q = $this->db->where(array('Username'=>$Username,'Password'=>$Password))->get('adminTable');
            if($q->num_rows()){
                return true;
            }
            else{
                return false;
            }
        }
        public function getData(){
            return $this->db->get('student_data')->result_array();
        }
    }
?>