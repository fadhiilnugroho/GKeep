<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_signin extends CI_Controller {

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
    public function __construct()
	{
		parent::__construct();
		
        $this->load->model('M_web');
		//load library form validation
        $this->load->library('form_validation');
        $this->load->library('session');
	}
	public function index()
	{  
        $this->load->view('V_signin');
    }
    public function password()
	{  
        $this->load->view('V_password');
    }
    public function regis(){
        $this->load->view('V_regis');
    }
    public function tambah()
	{
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('konfirm', 'Konfirm', 'required');
	   $data = array(
            'first_name' => $this->input->post('firstname'),
            'last_name' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('pass')
        );
        $user = $this->M_web->GetUserbyEmail($data['email']);//mengecek apakah email sudah terdaftar
        $conf = $this->input->post('konfirm');//konifrmasi bahwa password sama/benar
        if(($user == false && $this->form_validation->run() == TRUE) ){ 
            if(($data['password']==$conf)){
                $this->M_web->InsertUser($data);//masukkan ke database
                 redirect('C_signin/Index');	
            }else{
                $this->session->set_flashdata('alertP', 'Password salah');
                redirect('C_signin/regis');
            }
        }else{
            redirect('C_signin/regis');
            $this->session->set_flashdata('alertE', 'Email telah terdaftar');
        }
	}
    public function CekAkun()
	{
        $email = $this->input->post('email');//ambil nilai email pada form
        $user = $this->M_web->GetUserbyEmail($email);//cek apakah akun terdaftar
        $this->form_validation->set_rules('email', 'Email', 'required');
        if($user == false|| $this->form_validation->run() == FALSE){
            $this->session->set_flashdata('alert', 'akun tidak terdaftar');
            redirect('C_signin/Index');	
        }else{
            $this->session->set_userdata('email',$email);//jadikan session
            $this->session->set_userdata('username',$user['first_name']);
            $this->load->view('V_password');
        }
	}
  
     public function login()     
	{ 
        $password = $this->input->post('pass');
        $email = $this->session->userdata('email');
        $user = $this->M_web->GetUserbyEmail($email);//cuma buat ngambil password dari database
        if($password == $user['password']){
            redirect('C_signin/LoadCatatan');	
        }else{
            $this->session->set_flashdata('alert', 'Password salah');
            redirect('C_signin/password');	
        }
	}
    public function hapusCatatan($id){
        $data['sampah']='ya';
        $this->M_web->UpdateCatatan($id,$data);
        redirect('C_signin/LoadSampah');
    }
    public function arsipCatatan($id){
        $data['arsipkan']='ya';
        $this->M_web->UpdateCatatan($id,$data);
        redirect('C_signin/LoadArsip');
    }
    public function batalArsipCatatan($id){
        $data['arsipkan']='tidak';
        $this->M_web->UpdateCatatan($id,$data);
        redirect('C_signin/LoadArsip');
    }
    public function pulihkanCatatan($id){
        $data['sampah']='tidak';
        $this->M_web->UpdateCatatan($id,$data);
        redirect('C_signin/LoadSampah');
    }
    public function hapusLabel($id){
        $this->M_web->DeleteLabel($id);
        redirect('C_signin/LoadCatatan');	
    }
    public function hapusSampah($id){
        $this->M_web->DeleteCatatan($id);
        redirect('C_signin/LoadCatatan');	
    }
    public function LoadCatatan(){
        $email = $this->session->userdata('email');
        $this->session->set_flashdata('halaman', 'Keep');
        $this->session->set_userdata('label','');
        $label = $this->M_web->GetLabel($email);
        $catatan = $this->M_web->GetCatatan($email);
        $this->session->set_userdata('label','');
        $this->session->set_flashdata('catatan', '#bbff99'); 
            $this->load->view('header');
            $this->load->view('sidebar',['data'=>$label]);
            $this->load->view('form_tambah');   
            $this->load->view('isi',['data'=>$catatan]);
            $this->load->view('footer');        
    }
    public function LoadCatatanByLabel($id){
        $email = $this->session->userdata('email');
        $this->session->set_userdata('label',$id);
        $namalabel = $this->M_web->GetLabelName($id);
        $this->session->set_flashdata('halaman', $namalabel['nama']);
        $label = $this->M_web->GetLabel($email);
        $catatan = $this->M_web->GetCatatanByLabel($email,$id);
        $this->session->set_flashdata($id, '#bbff99'); 
            $this->load->view('header');
            $this->load->view('sidebar',['data'=>$label]);
            $this->load->view('form_tambah');   
            $this->load->view('isi',['data'=>$catatan]);
            $this->load->view('footer');        
    }
    public function LoadArsip(){
        $email = $this->session->userdata('email');
        $this->session->set_flashdata('halaman', 'Arsipkan');
        $label = $this->M_web->GetLabel($email);
        $catatan = $this->M_web->GetArsip($email);
        $this->session->set_flashdata('arsip', '#bbff99'); 
            $this->load->view('header');
            $this->load->view('sidebar',['data'=>$label]);
            $this->load->view('isi',['data'=>$catatan]);
            $this->load->view('footer');        
    }
    public function LoadSampah(){
        $email = $this->session->userdata('email');
        $this->session->set_flashdata('halaman', 'Sampah');
        $label = $this->M_web->GetLabel($email);
        $catatan = $this->M_web->GetSampah($email);
        $this->session->set_flashdata('sampah', '#bbff99'); 
            $this->load->view('header');
            $this->load->view('sidebar',['data'=>$label]);
            $this->load->view('sampah');
            $this->load->view('isi',['data'=>$catatan]);
            $this->load->view('footer');        
    }
    
     public function LoadPengingat(){
        $email = $this->session->userdata('email');
        $this->session->set_flashdata('halaman', 'Pengingat');
        $this->session->set_userdata('label','');
        $label = $this->M_web->GetLabel($email);
        $catatan = $this->M_web->GetPengingat($email);
        $this->session->set_flashdata('pengingat', '#bbff99'); 
            $this->load->view('header');
            $this->load->view('sidebar',['data'=>$label]);
            $this->load->view('form_tambah'); 
            $this->load->view('isi',['data'=>$catatan]);
            $this->load->view('footer');
    }
    public function tambahCatatan()
	{
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        if(($judul == !null) || ($isi==!null)){
            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'email' => $this->session->userdata('email'),
                'pengingat'=>$this->input->post('pengingat'),
                'id_label'=>$this->session->userdata('label')
            );
            $this->M_web->InsertCatatan($data);
            redirect('C_signin/LoadCatatan');	
        }else{
            redirect('C_signin/LoadCatatan');
        }
	}
     public function ubahCatatan($id)
	{
        $judul = $this->input->post('judul_modal');
        $isi = $this->input->post('isi_modal');
        if(($judul == !null) || ($isi==!null)){
            $data = array(
                'judul' => $judul,
                'isi' => $isi,
                'email' => $this->session->userdata('email')
            );
            $this->M_web->UpdateCatatan($id,$data);
            redirect('C_signin/LoadCatatan');	
        }else{
            redirect('C_signin/LoadCatatan');
        }
	}
    public function ubahLabel($id){
        $data = array(
                'nama'=>$this->input->post('label')
            );
        $this->M_web->UpdateLabel($id,$data);
        redirect('C_signin/LoadCatatan');	
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('C_signin/index');	
    }
    public function kosongkanSampah(){
        $id= $this->session->userdata('email');
        $this->M_web->DeleteSampah($id);
        redirect('C_signin/LoadSampah');	
    }
    public function addLabel(){
        $data = array (
            'nama' =>   $this->input->post('label'),
            'email'=>   $this->session->userdata('email')
        );
        if(!empty($data['nama'])){
            $this->M_web->InsertLabel($data);
            redirect('C_signin/LoadCatatan');	
        }
    }
    
}
