<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	public function GetUser(){
		$query = $this->db->get('user');
		return $query->result();
	}
	
	public function GetCatatan($id){
        $this->db->where('email',$id);
        $this->db->where('arsipkan','tidak');
        $this->db->where('sampah','tidak');
		$query = $this->db->get('catatan');
		return $query->result();
	}
    public function GetCatatanByLabel($id,$label){
        $this->db->where('email',$id);
        $this->db->where('id_label',$label);
        $this->db->where('arsipkan','tidak');
        $this->db->where('sampah','tidak');
		$query = $this->db->get('catatan');
		return $query->result();
	}
    public function GetArsip($id){
        $this->db->where('email',$id);
        $this->db->where('arsipkan','ya');
        $this->db->where('sampah','tidak');
		$query = $this->db->get('catatan');
		return $query->result();
	}
    public function GetSampah($id){
        $this->db->where('email',$id);
        $this->db->where('sampah','ya');
		$query = $this->db->get('catatan');
		return $query->result();
	}
    public function GetPengingat($id){
        $this->db->where('email',$id);
        $this->db->where('arsipkan','tidak');
        $this->db->where('sampah','tidak');
        $this->db->where('pengingat',!null);
		$query = $this->db->get('catatan');
		return $query->result();
	}
    public function GetLabel($id){
        $this->db->where('email',$id);
        $query = $this->db->get('label');
		return $query->result();
    }
    public function GetLabelName($id){
        $this->db->select('nama');
        $this->db->where('id_label',$id);
        $query = $this->db->get('label');
		return $query->row_array();
    }
    public function InsertUser($data){
        $this->db->insert('user', $data);  
    }
    public function InsertCatatan($data){
        $this->db->insert('catatan', $data);  
    }
     public function InsertLabel($data){
        $this->db->insert('label', $data);  
    }
    
    public function GetUserbyEmail($email){
        $query=$this->db->get_where('user',array('email'=>$email) );
        if($query->num_rows()==1){
            return $query->row_array();
        }else{
            return false;
        }
    }
    public function UpdateCatatan($id,$data){
        $this->db->where('id_catatan', $id);
        $this->db->update('catatan', $data);
    }
    public function UpdateLabel($id,$data){
        $this->db->where('id_label', $id);
        $this->db->update('label', $data);
    }
    
  
    public function DeleteCatatan($id)
	{
        $this->db->where('id_catatan', $id);
        $this->db->delete('catatan');
	}
    public function DeleteSampah($id)
	{
        $this->db->where('email', $id);
        $this->db->where('Sampah', 'ya');
        $this->db->delete('catatan');
	}
    public function DeleteLabel($id)
	{  $this->db->where('id_label', $id);
        $this->db->delete('label');
	}
    
    
}

