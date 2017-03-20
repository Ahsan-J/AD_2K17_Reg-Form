<?php
class BasePage extends CI_Controller{
    public function index(){
        $this->load->view("Form.php");
    }
    public function save(){
        $this->load->model("saveInDB","save");
        $this->save->save($_POST);
        $this->load->view("ThankYou");
    }
    public function adminpanel(){
        $this->load->model('data_model');
        if($this->data_model->verify($_POST['Username'],$_POST['Password'])){
            $data = $this->data_model->getData();
            $this->load->view('admin',['student_data'=>$data,'Username'=>$_POST['Username']]);    
        }
        else{
            redirect('basePage/index');
        }
    }
}

?>