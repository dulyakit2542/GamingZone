<?php
class User extends CI_model{
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

    public function user_login($user_data){
        
        $this->db->where('email', $user_data['email']);
        $this->db->where('password', $user_data['password']);
        $query = $this->db->get('user');
        if($query->row() > 0){
            return true;
        }else{
            return false;
        }

        
    }
    public function check_login($user_data)
    {
        // var_dump($user_data);
        // $user = new stdClass;
        $email = $user_data['email'];
        $password = $user_data['password'];
        $sql = "
        SELECT
            `user`.*
        FROM
             `user` 
        WHERE `user`.email = '$email' AND `user`.password = '$password'
        ";
        $q = $this->db->query($sql);
        $result = $q->result();
        if (count($result) > 0) {
            $user = array(
                'user_info' => $result[0],
                'login' => true
            );
            return $user;
        } else {
            return false;
        }
    }
    public function user_admin($user_data){
        
        $this->db->where('email', $user_data['email']);
        $this->db->where('password', $user_data['password']);
        $query = $this->db->get('user_admin');
        if($query->row() > 0){
            return true;
        }else{
            return false;
        }

        
    }

	
    public function register2($user_data){
        $this->db->where('email', $user_data['email']);
        $query = $this->db->get('user');;
        if($query->row()){
            return true;
        }else{
            return false;
        }

        
    }

    public function create_user($user_data){
        $this->db->insert('user',$user_data);
    }

    public function user(){
        $sql = "
        SELECT
	        `user`.*
        FROM
	        `user`
         ";
        $this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		return $this->rs;
    }
    public function user_id($id){
        $sql = "
        SELECT
	        `user`.*
        FROM
	        `user`
        WHERE
            user.id = $id
         ";
        $this->q = $this->db->query($sql);
		$this->rs = $this->q->result();
		$this->c = count($this->rs);
		$this->r = $this->q->row();
		return $this->rs;
    }
    public function update_user($id,$data){
        $this->db->where('id',$id);
        $this->db->update('user',$data);
    }
	public function del_user($id){
        $this->db->where('id',$id);
        $this->db->delete('user');
    }
    // public function daaas(){
    //     $sql = "
		
	// 	"
	// ;
	// 	$this->q = $this->db->query($sql);

	// 	$this->rs = $this->q->result();
	// 	$this->c = count($this->rs);
	// 	$this->r = $this->q->row();
	// 	//array_push($this->rs, array('sql'=>$sql));
	// 	return $this->rs;

        
    // }
    
}

