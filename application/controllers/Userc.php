<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userc extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('user');
		$r['user'] = $this->user->user_id($_SESSION['user_info']->id);
		$this->load->view('core/header');
		$this->load->view('user',$r);
		$this->load->view('core/footer');

	}
	// public function manage_user_edit($id='')
	// {   

    //     if(isset($id)){

    //         $this->load->model('user');
    //         $result['user'] = $this->user->user_id($id);
    //         $this->load->view('core/header');
    //         $this->load->view('manage_user_edit',$result);
	// 		$this->load->view('core/footer');
	// 	}
	// }
}
