<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{
    public function get()
    { return $this->db->get('news')->result(); }

    public function insert($data)
    { return $this->db->insert('news', $data); }

    public function where($id)
    { return $this->db->get_where('news', ['id_news'=>$id])->row(); }

    public function update($id,$data)
    { return $this->db->update('news', $data, ['id_news'=>$id]); }

    public function delete($id)
    { return $this->db->delete('news', ['id_news'=>$id]); }
}
?>