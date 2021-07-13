<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {
    public function __construct() {   
		// $this->load->helper(array('form', 'url','html'));
		// $this->load->model('premierleague');     
		parent::__construct();
	}

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
        // $this->load->view('core/header');
        // $this->load->view('detail');
        // $this->load->view('core/footer');
    }
    
}
