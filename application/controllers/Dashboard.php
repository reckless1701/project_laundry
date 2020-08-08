<?php
    Class Dashboard extends CI_Controller{
        public function index(){
            $data['title'] = "Form Admin";
            $this->load->view('admin', $data);
        }
        public function login(){
            $this->load->view('login');
        }
        public function tambahuser(){
            $this->load->view('tambahuser');
        }
        public function home(){
            $this->load->view('dashboard');
        }
    }
    
?>