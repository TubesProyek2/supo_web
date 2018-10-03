<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
    public function get()
    { return $this->db->get('gallery')->result(); }

    public function insert($data)
    { return $this->db->insert('gallery', $data); }

    public function where($id)
    { return $this->db->get_where('gallery', ['id_photo'=>$id])->row(); }

    public function update($id,$data)
    { return $this->db->update('gallery', $data, ['id_photo'=>$id]); }

    public function delete($id)
    { return $this->db->delete('gallery', ['id_photo'=>$id]); }
}
?>