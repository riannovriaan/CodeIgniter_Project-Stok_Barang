<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stokbarang extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_stokbarang');

    }
    function index()
    {
        if($this->session->userdata('login') == '1'){
        $data['hasil']=$this->Model_stokbarang->read();
        $this->load->view('header',$data); 
        $this->load->view('v_stokbarang');
        $this->load->view('footer');
    }else{ 
        $this->session->set_flashdata('belum_login', '1');
        redirect('stokbarang/login', 'refresh');
    }
}
    public function login ()
    {
        $this->load->view('header'); 
        $this->load->view('login');
        $this->load->view('footer');
        if (isset($_POST['login'])){
            $this->_login();
        }
    }

    private function _login()
{
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
    if ($user){
        if (password_verify($password, $user['password'])){
            $this->session->set_userdata('login', '1');
            $this->session->set_userdata('username', $user['username']);
        redirect('', 'refresh');
        }
        }else{
            $this->session->set_flashdata('salah_login', '1');
            redirect('stokbarang/login', 'refresh');
        } 
    }
public function logout()
{
    session_destroy();
    redirect('stokbarang/login','refresh');
}

    public function tambah()
    {
        if($this->session->userdata('login') == '1'){
        $this->load->view('header'); 
        $this->load->view('v_tambah_barang'); 
        $this->load->view('footer');
        if (isset($_POST['tambah'])) {
            $this->Model_stokbarang->simpan_stok();
        }
    }else{ 
        $this->session->set_flashdata('belum_login', '1');
        redirect('stokbarang/login', 'refresh');
    }
    }
    
    function update($ID)
    {   
        if($this->session->userdata('login') == '1'){
        $data['ambil']=$this->Model_stokbarang->GetID($ID);
        $this->load->view('header', $data); 
        $this->load->view('v_update_barang',$data);
        $this->load->view('footer');
        if (isset($_POST['update'])) {
            $this->Model_stokbarang->simpan_update();
        }
    }else{ 
        $this->session->set_flashdata('belum_login', '1');
        redirect('stokbarang/login', 'refresh');
    }
	}
	
    function hapus($ID)
    {
        
        $this->Model_stokbarang->HapusBarang($ID);
        redirect('stokbarang','refresh');
    }
}

