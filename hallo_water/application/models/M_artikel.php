<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel extends CI_Model
{

    public function artikel()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        return $this->db->get()->result();

   
    }

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('tbl_artikel', $data);
    }

    public function edit($data)
    {

        $this->db->where('id_artikel', $data['id_artikel']);

        $this->db->update('tbl_artikel', $data);
    }
    public function delete($data)
    {

        $this->db->where('id_artikel', $data['id_artikel']);
        
        $this->db->delete('tbl_artikel', $data);
        
    }
}
                        
/* End of file m_artikel.php */
