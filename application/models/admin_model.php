<?php 
class admin_model extends CI_Model{

  function comprobar_login($email,$pass){
    $pass2 = md5($pass);
    $query="select * from Members where email='$email' and pass='$pass2'";
  //  echo $query;
    $result = $this->db->query($query);
    $re= $result->result();
    $final_result=0;
    foreach ($re as $r ) {
        $final_result=$r->id_members;
        break;
    }
  
    return $final_result;    
  }
  function get_local(){
     $query="select * from Local";
     $result = $this->db->query($query);
     return $result->result();   
  }
  function agregar_local($data){
   
     $this->db->insert('Local', $data);
     $query="select id_local from Local where nombre_local='$data[nombre_local]'";
     $result = $this->db->query($query);
     $res=$result->result();
     foreach ($res as $r) {
        return $r->id_local;   
     }
     

  }
    
}

 ?>