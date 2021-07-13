<?php
class Game extends CI_model{
    private $f = '';		// filter
	private $o = '';		// order

	private $q = Null;		// query
	private $rs = Null;		// record set
	private $r = Null;		// current record
	private $c = 0;			// record count
    public function __construct()
    {
        $this->load->database();
    }

    // public function user_login($user_data){
        
    //     $this->db->where('email', $user_data['email']);
    //     $this->db->where('password', $user_data['password']);
    //     $query = $this->db->get('user');
    //     if($query->row() > 0){
    //         return true;
    //     }else{
    //         return false;
    //     }

        
    // }

    // public function create_user($user_data){
    //     $this->db->insert('user',$user_data);
    // }

    public function get_game(){
        $sql = "
		SELECT
        game.id,
        game.group_game,
        game.`name`,
        game.company,
        game.image,
        game.detail,
        game.age,
        game.price,
        game.system,
        game.date,
        game.rating,
        game.detail_index,
        company.no_company,
        company.company,
        system.no_system,
        system.os,
        system.cpu,
        system.ram,
        system.gpu,
        group_game.no_group,
        group_game.name_group
        FROM
        game ,
        company ,
        system ,
        group_game
        WHERE
        game.company = company.no_company AND
        game.system = system.no_system AND
        game.group_game = group_game.no_group
		"
	;
		$this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		//array_push($this->rs, array('sql'=>$sql));
		return $this->rs;

        
    }
    public function get_by_id($id){
        $sql = "
		SELECT
        ga.id,
        ga.group_game,
        ga.`name`,
        ga.company,
        ga.age,
        ga.image,
        ga.detail,
        ga.price,
        ga.system,
        ga.date,
        ga.rating,
        ga.detail_index,
        co.no_company,
        co.company,
        gr.no_group,
        gr.name_group,
        sys.no_system,
        sys.os,
        sys.cpu,
        sys.ram,
        sys.gpu
        FROM
        game AS ga
        LEFT JOIN company AS co ON ga.company = co.no_company 
        LEFT JOIN group_game AS gr ON gr.no_group = ga.group_game
        LEFT JOIN system AS sys ON sys.no_system = ga.system
        WHERE
        ga.id = $id
		"
	;
		$this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		//array_push($this->rs, array('sql'=>$sql));
		return $this->rs;

        
    }

    public function get_group(){
        $sql = "
		SELECT * FROM `group_game`
		"
	;
		$this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		//array_push($this->rs, array('sql'=>$sql));
		return $this->rs;
    }
    public function get_company(){
        $sql = "
		SELECT * FROM `company`
		"
	    ;
		$this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		//array_push($this->rs, array('sql'=>$sql));
		return $this->rs;
    }
    public function get_system(){
        $sql = "
		SELECT * FROM `system`
		"
	;
		$this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		//array_push($this->rs, array('sql'=>$sql));
		return $this->rs;
    }
    public function update_game($id,$data){
        // echo '<pre>';
        // var_dump($data);
        $this->db->where('id',$id);
        $this->db->update('game',$data);
    }
    public function del_game($id){
        //  echo '<pre>';
        // var_dump($data);
        $this->db->where('id',$id);
        $this->db->delete('game');
        
    }
    public function insert_game($data){
        // echo '<pre>';
        // var_dump($data);
        $this->db->insert('game',$data);
    }
    public function new_game($data){
        return ($this->db->insert('game',$data)) ? true : false ;
    }
}

