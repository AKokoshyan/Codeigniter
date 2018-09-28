<?php
class FirstController extends CI_Controller{
    public function showView(){
        $this ->load->view("firstview");
    }
}
?>