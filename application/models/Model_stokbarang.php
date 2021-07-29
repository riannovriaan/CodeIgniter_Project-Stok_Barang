<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
Class Model_stokbarang extends CI_Model
{
    function read() 
    {
        $this->db->order_by('Nama_Barang', 'ASC');
        return $this->db->from('stok_barang')
        ->get()
        ->result();
    } 
    
    function GetID($ID = '')
    {
        return $this->db->get_where('stok_barang', array('ID' => $ID))->row();
    } 
    function HapusBarang($ID)
    {
        $this->db->delete('stok_barang',array('ID' => $ID));
        $this->session->set_flashdata('pesan','Dihapus');
    }
    public function simpan_stok(){
        $data = array(
            'ID'=>$this->input->post('ID'),
            'Nama_Barang'=>$this->input->post('Nama_Barang'),
            'Jenis_Barang'=>$this->input->post('Jenis_Barang'),
            'Jumlah_Stok'=>$this->input->post('Jumlah_Stok'),
            'Satuan'=>$this->input->post('Satuan'),
            );
            $this->db->insert('stok_barang',$data);
            $this->session->set_flashdata('pesan','Ditambah');
            redirect('stokbarang/index','refresh');
        
    }
    function simpan_update()
    {
        $data = array(
            'Nama_Barang'=>$this->input->post('Nama_Barang'),
            'Jenis_Barang'=>$this->input->post('Jenis_Barang'),
            'Jumlah_Stok'=>$this->input->post('Jumlah_Stok'),
            'Satuan'=>$this->input->post('Satuan'),
    
		);
	    $ID = $this->input->post('ID');
	    $this->db->where('ID', $ID);
        $this->db->update('stok_barang',$data);
        $this->session->set_flashdata('pesan','Diubah');
        redirect('stokbarang','refresh');
    }
}
?>