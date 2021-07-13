<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
		$this->load->model('game');
		$r['game'] = $this->game->get_game();
		$r['group'] = $this->game->get_group();
		$r['company'] = $this->game->get_company();
		$r['system'] = $this->game->get_system();
		// $this->load->view('core/header_admin');
		$this->load->view('core/header');
		$this->load->view('dashboard',$r);
		$this->load->view('core/footer');
   
	}
	public function dashboard_view($id='')
	{   

        if(isset($id)){

            $this->load->model('game');
            $result['game'] = $this->game->get_by_id($id);
            $result['group'] = $this->game->get_group();
			$result['company'] = $this->game->get_company();
			$result['system'] = $this->game->get_system();
            $this->load->view('core/header');
            $this->load->view('edit',$result);
			$this->load->view('core/footer');
		}

        
	}
	public function dashboard_insert($id='')
	{   

        if(isset($id)){

            $this->load->model('game');
            $result['game'] = $this->game->get_by_id($id);
            $result['group'] = $this->game->get_group();
			$result['company'] = $this->game->get_company();
			$result['system'] = $this->game->get_system();
            $this->load->view('core/header');
            $this->load->view('insert',$result);
			$this->load->view('core/footer');
		}
	}
	public function manage_user(){
		$this->load->model('user');
		$r['user'] = $this->user->user();
		$this->load->view('core/header');
		$this->load->view('manage_user',$r);
		$this->load->view('core/footer');

	}
	public function manage_user_edit($id='')
	{   

        if(isset($id)){

            $this->load->model('user');
            $result['user'] = $this->user->user_id($id);
            $this->load->view('core/header');
            $this->load->view('manage_user_edit',$result);
			$this->load->view('core/footer');
		}
	}
	public function update($id='')
	{
		$this->load->model('game');

	}
	public function del_game($id='')
	{
		$this->load->model('game');

	}
	public function insert_game()
	{
		$this->load->model('game');

	}

 }

