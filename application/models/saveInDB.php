<?php 
    class SaveInDB extends CI_Model{
        public function save($data){
            $array = array(
                'Name'=>$data['Name'],
                'FatherName'=>$data['FatherName'],
                'SeatNumber'=>$data['Seat'],
                'Program'=>$data['Program'],
                'Time'=>$data['Time'],
                'Year'=>$data['Year'],
                'AppliedFor'=>$data['Team']
            );
            //echo "<script>alert('Code Disabled');</script>";
            $this->db->insert('student_data',$array);
        }
    }


?>