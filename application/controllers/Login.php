<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $this->load->view('core/header');
        $this->load->view('login');
        // $this->load->view('core/headlogin');

    }
    public function user_login(){
        $user_data = $this->input->post();
        $this->load->model('user');
        $result = $this->user->check_login($user_data);
        if($result){
            $this->session->set_userdata($result);
            redirect('/main', 'refresh');
        }else{
            $r['fail'] = '123';
            $this->load->view('/login',$r);
        }
        // var_dump($r);
    }
    public function logout(){
        session_destroy();
        redirect('/main', 'refresh');
    }
    
    // เรียก view หน้า register
    public function register(){
        $this->load->view('register');
    }
    
    //CRUD MVC MODEL 
    public function user_register(){
        $user_data = $this->input->post();
        $this->load->model('user');
        $result = $this->user->register2($user_data);
        if($result){
            $r['fail'] = '123';
            $this->load->view('/register',$r);
        }else{
        $this->load->model('user');
        $this->user->create_user($user_data);
        $this->load->view('login');
     }
    }
    }
