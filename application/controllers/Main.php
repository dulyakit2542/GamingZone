<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAIN extends CI_Controller {
    public function __construct() {   
		// $this->load->helper(array('form', 'url','html'));
		// $this->load->model('premierleague');     
		parent::__construct();
	}

	public function index()
	{	
		$this->load->model('game');
		$r['game'] = $this->game->get_game();
        $this->load->view('core/header');
        $this->load->view('main',$r);
        $this->load->view('core/footer');
	}
	public function find_game()
	{	
		$this->load->model('game');
		$r['game'] = $this->game->get_game();
        $this->load->view('core/header');
        $this->load->view('find_game',$r);
        $this->load->view('core/footer');
	}
	public function game_view($id)
	{   
        if(isset($id)){

            $this->load->model('game');
            $result['game'] = $this->game->get_by_id($id);
            $this->load->view('core/header');
            $this->load->view('detail',$result);
            $this->load->view('core/footer');
		}
	}
	public function contact()
	{	
        $this->load->view('core/header');
        $this->load->view('contact');
        $this->load->view('core/footer');
	}
		

    
}
