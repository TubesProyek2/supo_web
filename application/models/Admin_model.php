<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get()
    { return $this->db->get('admin')->result(); }

    public function insert($data)
    { return $this->db->insert('admin', $data); }

    public function where($id)
    { return $this->db->get_where('admin', ['id_admin'=>$id])->row(); }

    public function update($id,$data)
    { return $this->db->update('admin', $data, ['id_admin'=>$id]); }

    public function delete($id)
    { return $this->db->delete('admin', ['id_admin'=>$id]); }

    public function check($data)
    { return $this->db->get_where('admin', $data)->row(); }
}
?>