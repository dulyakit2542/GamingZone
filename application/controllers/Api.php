<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    public function game($type="",$key="",$value="")
	{
		$json = new stdClass;
        $json->status = 'fail';
        $json->message = "Unknown error";
        switch($this->input->method(true)){ 
			case 'GET':
				$r = false;
				if($type == "company"){
					$this->load->model('booklibrary');
					$r = $this->booklibrary->get_company();
				}else if($type == "count"){
					$type = $key;
					$this->load->model('booklibrary');
					$r = $this->booklibrary->get_count($type);
				}
				if($r){
				$json->status = 'success';
				$json->message = "Found $type, $key, $value";
				$json->result = $r;
				}else{
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
			break;
			case 'POST':
				$r = false;
				parse_str(file_get_contents("php://input"), $var);
				$data = $var;
				if($type == 'edit_game'){
					$id = $key;
					$this->load->model('game');
					$r = $this->game->update_game($id,$data);
				}else if($type == 'new_game'){
					$this->load->model('game');
					$r = $this->game->new_game($data);
				}
				if($r){
				$json->status = 'success';
				$json->message = "Found $type, $key, $value";
				$json->result = $r;
				}else{
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
			case 'DELETE':
					$r = false;
							if($type == 'del_game'){
						$id = $key;
						$this->load->model('game');
						$r = $this->game->del_game($id);
					}
					if($r){
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
					}else{
						$json->status = 'fail';
						$json->message = "Not found $type, $key, $value";
					}
			break;
			case 'INSERT':
				$r = false;
				parse_str(file_get_contents("php://input"), $var);
				$data = $var;
				if($type == 'insert_game'){
					$id = $key;
					$this->load->model('game');
					$r = $this->game->insert_game($data);
				}
				if($r){
				$json->status = 'success';
				$json->message = "Found $type, $key, $value";
				$json->result = $r;
				}else{
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
			break;
			
			break;
			case 'PUT':
				$r = false;
				parse_str(file_get_contents("php://input"), $var);
				$data = $var;
				// $json->data = $data ;
				if($type == 'update_book'){
					$id = $key;
					$this->load->model('booklibrary');
					$r = $this->booklibrary->update_book($id,$data);
				}
				if($r){
				$json->status = 'success';
				$json->message = "Found $type, $key, $value";
				$json->result = $r;
				}else{
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
			break;
			
		}}
		public function user($type="",$key="",$value="")
		{
			$json = new stdClass;
			$json->status = 'fail';
			$json->message = "Unknown error";
			switch($this->input->method(true)){ 
				case 'GET':
					$r = false;
					if($type == "company"){
						$this->load->model('booklibrary');
						$r = $this->booklibrary->get_company();
					}else if($type == "count"){
						$type = $key;
						$this->load->model('booklibrary');
						$r = $this->booklibrary->get_count($type);
					}
					if($r){
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
					}else{
						$json->status = 'fail';
						$json->message = "Not found $type, $key, $value";
					}
				break;
				case 'POST':
					$r = false;
					parse_str(file_get_contents("php://input"), $var);
					$data = $var;
					if($type == 'edit_user'){
						$id = $key;
						$this->load->model('user');
						$r = $this->user->update_user($id,$data);
					}else if($type == 'new_game'){
						$this->load->model('game');
						$r = $this->game->new_game($data);
					}
					if($r){
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
					}else{
						$json->status = 'fail';
						$json->message = "Not found $type, $key, $value";
					}
				case 'DELETE':
						$r = false;
							if($type == 'del_game'){
							$id = $key;
							$this->load->model('game');
							$r = $this->game->del_game($id);
						}else if($type == 'del_user'){
							$id = $key;
							$this->load->model('user');
							$r = $this->user->del_user($id);
						}
						if($r){
						$json->status = 'success';
						$json->message = "Found $type, $key, $value";
						$json->result = $r;
						}else{
							$json->status = 'fail';
							$json->message = "Not found $type, $key, $value";
						}
				break;
				case 'INSERT':
					$r = false;
					parse_str(file_get_contents("php://input"), $var);
					$data = $var;
					if($type == 'insert_game'){
						$id = $key;
						$this->load->model('game');
						$r = $this->game->insert_game($data);
					}
					if($r){
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
					}else{
						$json->status = 'fail';
						$json->message = "Not found $type, $key, $value";
					}
				break;
				
				break;
				case 'PUT':
					$r = false;
					parse_str(file_get_contents("php://input"), $var);
					$data = $var;
					// $json->data = $data ;
					if($type == 'update_book'){
						$id = $key;
						$this->load->model('booklibrary');
						$r = $this->booklibrary->update_book($id,$data);
					}
					if($r){
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
					}else{
						$json->status = 'fail';
						$json->message = "Not found $type, $key, $value";
					}
				break;
				
			}
		echo json_encode($json);
	}
}
